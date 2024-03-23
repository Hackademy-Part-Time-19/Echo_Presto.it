<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function createAnnouncement()
    {
        return view('announcement.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showAnnouncement (Announcement $announcement)
    {
        return view('announcement.dettaglio', compact('announcement'));
    }

    public function indexAnnouncement ()
    {
        $announcements = Announcement::paginate(9);

        return view('announcement.index', compact('announcements'));
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
    public function show(Announcement $announcement)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
