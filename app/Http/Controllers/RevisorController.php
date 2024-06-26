<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use App\Models\Image;

class RevisorController extends Controller
{
    public function index(){

        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){

        $announcement->setAccepted(true);
        return redirect()->back()->with('message',  __('ui.accept'));
    }

    public function rejectAnnouncement(Announcement $announcement){
        $image_announcement=Image::where('announcement_id', $announcement->id)->first();
        $image_announcement->delete();
        $announcement->delete();
        return redirect()->back()->with('message',  __('ui.reject'));
    }

    public function becomeRevisor(){

        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message',  __('ui.envoy'));
    }

    public function makeRevisor(User $user){

        Artisan::call('presto:makeUserRevisor',['email' => $user->email]);
        return redirect('/')->with('message',  __('ui.accept2'));
    }


}
