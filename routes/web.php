<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;
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

Route::get('/', [FrontController::class, 'welcome'])->name('home');

Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');

Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('create');

Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('dettaglio');

Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');


// rotte revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

// rotte diventa revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// ricerca annuncio
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcements.search');

Route::get('/work', [WorkController::class, 'showWorkPage'])->name('work');
Route::get('/work/redirect', [WorkController::class, 'redirectHome'])->name('work.redirect');

//gestione profilo
Route::get('/user/profile/{user}', [ProfileController::class, 'show'])->name('user.profile');

Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('setlanguagelocale');

Route::get('/user/update/{profile}', [ProfileController::class, 'create'])->name('user.update');
Route::post('/user/update/{id}', [ProfileController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [ProfileController::class, 'destroy'])->name('user.delete');

Route::get('/user/insert/{id}', [ProfileController::class, 'insert'])->name('user.insert');

Route::get('announcement/revision/{id}', [AnnouncementController::class, 'revision'])->name('announcement.revision');

Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('setlanguagelocale');


//carrello
Route::middleware(['auth'])->group(function () {
  Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
  Route::post('/cart/add/{announcement}', [CartController::class, 'add'])->name('cart.add');
  Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
  Route::patch('/cart/{item}', [CartController::class, 'update'])->name('cart.update');
  Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
  Route::delete('/destroy', [CartController::class, 'destroy'])->name('destroy');
});
