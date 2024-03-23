<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{

    public $title;
    public $body;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute deve essere un numero',
    ];

    public function store()
    {
        $category = Category::find($this->category);

        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);

      

        Auth::user()->announcements()->save($announcement);
       
        
         if($this->title == '' || $this->body == '' || $this->price == '' || $this->category == ''){
            session()->flash('error', 'Compila tutti i campi');
            ;
        }else{
            session()->flash('success', 'Articolo inserito con successo');
        
        } 

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
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }
}
