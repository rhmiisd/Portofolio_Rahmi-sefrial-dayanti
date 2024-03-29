<?php

use App\Models\Pendidikan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PengalamanController;
use App\Models\Contact;
use App\Models\Pengalamans;

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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Auth::routes();
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

//pendidikan
Auth::routes();
Route::get('/pendidikans', [PendidikanController::class, 'index'])->name('admin.pendidikan.index');
Route::get('/pendidikans/create', [PendidikanController::class, 'create'])->name('admin.pendidikan.create');
Route::post('/pendidikans/store', [PendidikanController::class, 'store'])->name('admin.pendidikan.store');
Route::patch('/pendidikans/{id}', [PendidikanController::class, 'update'])->name('admin.pendidikan.update');
Route::get('/pendidikans/{id}', [PendidikanController::class, 'edit'])->name('admin.pendidikan.edit');
Route::get('/pendidikans/show/{id}', [PendidikanController::class, 'show'])->name('admin.pendidikan.show');
Route::delete('/pendidikans/{id}', [PendidikanController::class, 'destroy'])->name('admin.pendidikan.destroy');

//profile
Auth::routes();
Route::get('/profiles', [ProfileController::class, 'index'])->name('admin.profile.index');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('admin.profile.create');
Route::post('/profiles/store', [ProfileController::class, 'store'])->name('admin.profile.store');
Route::get('/profiles/{id}', [ProfileController::class, 'edit'])->name('admin.profile.edit');
Route::get('/profiles/show/{id}', [ProfileController::class, 'show'])->name('admin.profile.show');
Route::delete('/profiles/{id}', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
Route::patch('/profiles/{id}', [ProfileController::class, 'update'])->name('admin.profile.update');

//contact
Auth::routes();
Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contact.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('admin.contact.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('admin.contact.store');
Route::get('/contacts/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');
Route::get('/contacts/show/{id}', [ContactController::class, 'show'])->name('admin.contact.show');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');

//Pengalaman
Auth::routes();
Route::get('/pengalamans', [PengalamanController::class, 'index'])->name('admin.pengalaman.index');
Route::get('/pengalamans/create', [PengalamanController::class, 'create'])->name('admin.pengalaman.create');
Route::post('/pengalamans/store', [PengalamanController::class, 'store'])->name('admin.pengalaman.store');
Route::get('/pengalamans/{id}', [PengalamanController::class, 'edit'])->name('admin.pengalaman.edit');
Route::get('/pengalamans/show/{id}', [PengalamanController::class, 'show'])->name('admin.pengalaman.show');
Route::delete('/pengalamans/{id}', [PengalamanController::class, 'destroy'])->name('admin.pengalaman.destroy');
Route::patch('/pengalamans/{id}', [PengalamanController::class, 'update'])->name('admin.pengalaman.update');