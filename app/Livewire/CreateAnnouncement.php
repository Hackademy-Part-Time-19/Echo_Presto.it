<?php

namespace App\Livewire;

use App\Models\Announcements;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;

    public function store()
    {
        Announcements::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        return view('livewire.create-announcement');
    }


    public function render()
    {
        return view('livewire.create-announcement');
    }

   
   
}
