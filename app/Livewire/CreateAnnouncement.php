<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $image;
    public $temporary_images;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'

    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute deve essere un numero',
        'temporary_images.*.image' => 'Il file deve essere un\'immagine',
        'temporary_images.*.max' => 'Il file non deve superare 1MB',
        'images.*.image' => 'Il file deve essere un\'immagine',
        'images.*.max' => 'Il file non deve superare 1MB',


    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*' => 'image|max:1024'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        $logoPath = public_path('Images/LogoF1.png');
        $logo = imagecreatefrompng($logoPath);
        if (count($this->images)) {
            foreach ($this->images as $image) {

                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);
                $imagePath = public_path('storage/' . $newImage->path);

                $this->applyWatermark($imagePath, $logo);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 400),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);

                dispatch(new ResizeImage($newImage->path, 400, 400));
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));

            Auth::user()->announcements()->save($this->announcement);
        }
        if (Auth::user()->is_revisor == 1) {
            session()->flash('message', 'Annuncio inserito con successo');
            DB::table('announcements')->update(['is_accepted' => 1]);
        } else {
            session()->flash('message', 'Annuncio inserito con successo, sarà visibile dopo la revisione');
        }
        DB::table('announcements')->update(['user_id' => Auth::user()->id]);
        $this->cleanForm();
    }

    private function applyWatermark($imagePath, $logo)
    {


        $extension = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
        if ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png' || $extension === 'gif') {

            switch ($extension) {
                case 'jpg':
                case 'jpeg':
                    $image = imagecreatefromjpeg($imagePath);
                    break;
                case 'png':
                    $image = imagecreatefrompng($imagePath);
                    break;
                case 'gif':
                    $image = imagecreatefromgif($imagePath);
                    break;

            }


            $imageWidth = imagesx($image);
            $imageHeight = imagesy($image);
            $logoWidth = imagesx($logo);
            $logoHeight = imagesy($logo);

            $x = $imageWidth - $logoWidth - 10;
            $y = $imageHeight - $logoHeight -10;

            imagecopy($image, $logo, $x, $y, 0, 0, $logoWidth, $logoHeight);

            imagejpeg($image, $imagePath);

            imagedestroy($image);
            imagedestroy($logo);
        } else {

            return response()->json(['error' => 'Nessuna immagine caricata.'], 400);
        }


        return response()->json(['success' => 'Watermark applicato con successo.']);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
        $this->image = '';
        $this->images = [];
        $this->temporary_images = [];
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}
