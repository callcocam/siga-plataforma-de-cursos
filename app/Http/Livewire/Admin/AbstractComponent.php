<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Siga\Form\Builder\Field;
use App\Siga\Form\Builder\Facades\FormBuilder;
use Livewire\Component;
use Livewire\WithFileUploads;

abstract class AbstractComponent extends Component
{
    use WithFileUploads;

    public $avatar;

    protected $fieldsArray = [];

    abstract protected function view();

    protected function model()
    {
        return User::class;
    }

    protected function layout()
    {
        return 'layouts.admin';
    }

    protected function data()
    {
        return [];
    }

    protected function options()
    {
        return [
            'model' => $this->data(),                              // Not passed to view, just used in form class
            //'name' => 'users',
        ];
    }

    protected function fields()
    {
        $this->fieldsArray[] = [
            'name' => 'id',
            'type' => Field::HIDDEN,
        ];
        $this->addField('submit', Field::BUTTON_SUBMIT, ['label' => 'Save form']);
        return $this->fieldsArray;
    }

    protected function form()
    {
        return FormBuilder::createByArray($this->fields(), $this->options());
    }

    protected function addField($name, $type, $options = [])
    {
        $this->fieldsArray[] = array_merge([
            'name' => $name,
            'type' => $type
        ], $options);

        return $this;
    }

    protected function editor($name, $options = [])
    {
        return $this->addField('description', Field::TEXTAREA, array_merge(['attr' => ['id' => $name]], $options));
    }

    protected function status()
    {
        return $this->addField('status', Field::CHOICE, [
            'choices' => [$this->model()::DRAFT => $this->model()::DRAFT, $this->model()::REVISION => $this->model()::REVISION, $this->model()::PUBLISHED => $this->model()::PUBLISHED],
            'expanded' => true
        ]);
    }

    public function render()
    {
        return view($this->view())
            ->with('data', $this->data())
            ->with('form', $this->form())
            ->layout($this->layout());
    }

}
