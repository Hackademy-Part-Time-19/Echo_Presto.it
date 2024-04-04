<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function welcome () {

        $announcements = Announcement::orderBy('created_at','desc')->where('is_accepted', true)->take(6)->get();
        return view('homepage', compact('announcements'));
    }

     public function categoryShow (Category $category) {
        $announcements = $category->announcements()->get();
        return view('announcement.categoryShow', compact('category'));
    }

    public function searchAnnouncements(Request $request){

        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(12);

        return view('announcement.index', compact('announcements'));
    }

    public function setLanguage($lang)
    {
       session()->put('locale', $lang);
       return redirect()->back();
    }

}
