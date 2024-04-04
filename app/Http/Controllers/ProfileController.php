<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use Illuminate\View\ViewName;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id)
    {
        $profile = Profile::where('id', $id)->first();
        return view('user.update', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = Profile::where('user_id', $id)->first();
        $profile->advertisements_placed=Announcement::where('user_id', $id)->where('is_accepted', 1)->count();
        return view('user.profile', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Profile::where('id', $id)->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'city' => $request->city,
            'address' => $request->address,
            'description' => $request->description
        ]);
        $user_id=Profile::where('id', $id)->value('user_id');
        return redirect()->route('user.profile',['user' => $user_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_id=Profile::where('id', $id)->value('user_id');
        DB::table('profiles')->where('user_id', $user_id)->delete();
        DB::table('users')->where('id', $user_id)->delete();
        return redirect()->route('home');
    }
}
