<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Forms;


use App\Http\Livewire\Forms\Traits\FollowsRules;
use App\Http\Livewire\Forms\Traits\HandlesArrays;
use App\Http\Livewire\Forms\Traits\UploadsFiles;
use Illuminate\Support\Arr;
use Livewire\Component;

class FormComponent extends Component
{
    use FollowsRules, UploadsFiles, HandlesArrays;

    public $model;
    public $form_data;
    private static $storage_disk;
    private static $storage_path;

    protected $route;

    /**
     * @var string[]
     */
    protected $listeners = ['fileUpdate'];


    /**
     * @param null $model
     */
    public function setFormProperties($model = null)
    {
        $this->model = $model;
        if ($model) $this->form_data = $model->toArray();
        foreach ($this->fields() as $field):
            if (!isset($this->form_data[$field->name])):
                $array = in_array($field->type, ['checkbox', 'file']);
                $this->form_data[$field->name] = $field->default ?? ($array? []: null);
            endif;
        endforeach;
    }

    /**
     * @return mixed
     */
    public function render(){

        return view($this->formView())->with('fields', $this->fields())->layout('layouts.admin');
    }

    /**
     * @return string
     */
    public function formView(){
        return 'laravel-livewire-forms::form';
    }

    /**
     * @return array
     */
    public function fields()
    {
        return [];
    }

    /**
     * @param $field
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($field){
        $this->validateOnly($field, $this->rules());
    }

    public function submit(){
        $this->validate($this->rules());

        $field_names=[];
        foreach ($this->fields() as $field) $field_names[] = $field->name;
        $this->form_data = Arr::only($this->form_data, $field_names);

        $this->success();
    }

    public function success(){

    }

    public function errorMessage($message){

        return str_replace('form_data.','', $message);
    }

    /**
     * Salvar e ir para outra view
     */
    public function saveAndStay(){
        $this->submit();
        $this->saveAndStayResponse();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveAndStayResponse(){
        return redirect()->route($this->route);
    }

    /**
     *
     */
    public function saveAndGoBack(){
        $this->submit();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveAndGoBackResponse(){
        return redirect()->route($this->route);
    }

}
