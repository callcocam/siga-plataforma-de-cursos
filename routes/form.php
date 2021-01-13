<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::post('/laravel-livewire-forms/file-upload', function () {
        return call_user_func([request()->input('component'), 'fileUpload']);
    })->name('laravel-livewire-forms.file-upload');
});
