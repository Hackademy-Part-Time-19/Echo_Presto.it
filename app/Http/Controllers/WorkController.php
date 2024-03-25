<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class WorkController extends Controller
{
    public function showWorkPage()
    {
        return view('work');
    }


    public function redirectHome(){
       
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect('/')->with('message', 'Hai inviato la tua richiesta per diventare revisore');
    }
}
