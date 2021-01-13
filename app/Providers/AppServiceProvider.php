<?php

namespace App\Providers;

use App\Http\Livewire\Forms\FormServiceProvider;
use App\Siga\Form\Builder\FormBuilderServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(FormBuilderServiceProvider::class);
        $this->app->register(FormServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
