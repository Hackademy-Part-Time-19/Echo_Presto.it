<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Models\Announcement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontController::class, 'welcome'])->name('home');

Route::get('/categoria/{category}',[FrontController::class, 'categoryShow'])->name('categoryShow');

Route::get('/nuovo/annuncio',[AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('create');

Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('dettaglio');

Route::get('/tutti/annunci', [Announcement::class, 'indexAnnouncement'])->name('announcement.index');
