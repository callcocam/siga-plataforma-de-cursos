<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Forms;


use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // $this->commands([MakeForm::class]);
        }

        $this->loadViewsFrom(resource_path('views/vendor/laravel-livewire-forms'), 'laravel-livewire-forms');
        $this->loadRoutesFrom(base_path('routes/form.php'));
    }

    public function register()
    {

    }
}
