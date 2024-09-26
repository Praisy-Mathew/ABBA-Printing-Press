<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;



Route::get('/', [BaseController::class, 'index'])->name('index');
Route::get('/home', [BaseController::class, 'home'])->name('homes');
Route::get('/about', [BaseController::class, 'about'])->name('about');
Route::get('/services1', [BaseController::class, 'services1'])->name('services1');
Route::get('/qualities', [BaseController::class, 'qualities'])->name('qualities');
Route::get('/clients', [BaseController::class, 'clients'])->name('clients');
 
Route::get('/associates', [BaseController::class, 'associates'])->name('associates');

Route::get('/contact', [BaseController::class, 'contact'])->name('contact');
Route::post('/contact-store', [BaseController::class, 'store'])->name('contact.store');


  


Route::get('/admin', [AdminController::class, 'index'])->name('index');
Route::get('/teams', [AdminController::class, 'teams'])->name('admin.teams'); // Get all teams
Route::post('/teams/store', [AdminController::class, 'teamStore'])->name('teams.store'); // Store a new team member
Route::put('/teams/update/{id}', [AdminController::class, 'teamUpdate'])->name('teams.update'); // Update a team member
Route::delete('/teams/{id}', [AdminController::class, 'teamDestroy'])->name('teams.destroy'); // Delete a team member


Route::get('/homes', [AdminController::class, 'home'])->name('home');
Route::get('/quality', [AdminController::class, 'quality'])->name('quality');
Route::post('/qualities/store', [AdminController::class, 'qualityStore'])->name('admin.qualities.store');
Route::put('/qualities/update/{id}', [AdminController::class, 'qualityUpdate'])->name('admin.qualities.update');
Route::delete('/qualities/destroy/{id}', [AdminController::class, 'qualityDestroy'])->name('admin.qualities.destroy');

Route::get('/client', [AdminController::class, 'clients'])->name('clients');
Route::post('/clients/store', [AdminController::class, 'clientStore'])->name('client.store');
Route::put('/clients/update/{id}', [AdminController::class, 'clientUpdate'])->name('client.update');
Route::delete('/clients/destroy/{id}', [AdminController::class, 'clientDestroy'])->name('client.destroy');


Route::get('/services', [AdminController::class, 'services'])->name('services');
Route::post('/services/store', [AdminController::class, 'serviceStore'])->name('service.store');
Route::put('/services/update/{id}', [AdminController::class, 'serviceUpdate'])->name('service.update');
Route::delete('/services/destroy/{id}', [AdminController::class, 'serviceDestroy'])->name('service.destroy');
Route::post('/services/toggle-visibility/{id}', [AdminController::class, 'toggleVisibility'])->name('service.toggleVisibility');

Route::get('/testimonials', [AdminController::class, 'testimonials'])->name('testimonials');
Route::post('/testimonials/store', [AdminController::class, 'testimonialsStore'])->name('admin.testimonials.store');
Route::put('/testimonials/update/{id}', [AdminController::class, 'testimonialsUpdate'])->name('admin.testimonials.update');
Route::delete('/testimonials/destroy/{id}', [AdminController::class, 'testimonialsDestroy'])->name('admin.testimonials.destroy');

Route::get('/contacts', [AdminController::class, 'contact'])->name('admin.contact');
Route::delete('/contact/{id}', [AdminController::class, 'destroy'])->name('contact.destroy');