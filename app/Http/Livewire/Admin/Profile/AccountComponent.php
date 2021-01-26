<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Http\Livewire\Forms\Field;
use App\Http\Livewire\Forms\FormComponent;
use App\Models\User;

class AccountComponent extends FormComponent
{


    /**
     * @param null $model
     */
    public function mount(User $model = null)
    {

        $this->setFormProperties($model);

    }

    public function fields()
    {
        return [
            Field::make('Name')->input()->rules('required'),
            Field::make('Email')->input()->rules('required'),
            Field::make('Profile Photo Url')->cover()->rules('required'),
        ];
    }

    public function view()
    {
        return 'livewire.admin.profile.account';
    }
}
