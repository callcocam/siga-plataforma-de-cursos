<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('about', function () {
    return view('admin.about');
})->name('about');

Route::get('forms', function () {
    return view('admin.forms');
})->name('forms');

//Rotas para components
use App\Http\Livewire\Admin\Profile\AccountComponent;
Route::get('profile/{model}', AccountComponent::class)->name('profile');
