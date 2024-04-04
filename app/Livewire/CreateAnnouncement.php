<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $announcement = Category::find($this->category)->announcements()->create($this->validate());
        if (count($this->images)) {
            foreach ($this->images as $image) {
                $announcement->images()->create(['path' => $image->store('images', 'public')]);
            }
            Auth::user()->announcements->save($this->announcement);
        }
        if(Auth::user()->is_revisor==1){
            session()->flash('message', 'Annuncio inserito con successo');
            DB::table('announcements')->update(['is_accepted' => 1]);
        }
        else{
            session()->flash('message', 'Annuncio inserito con successo, sarà visibile dopo la revisione');
        }
        DB::table('announcements')->update(['user_id' => Auth::user()->id]);
        $this->cleanForm();
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
