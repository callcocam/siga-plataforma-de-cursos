<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Forms;


use Illuminate\Support\Arr;

class BaseField
{

    protected $name;
    protected $type;
    protected $input_type;
    protected $options;
    protected $textarea_rows;
    protected $default;
    protected $autocomplete;
    protected $placeholder;
    protected $help;
    protected $rules;
    protected $view;

    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->$property;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function input($type = "text")
    {
        $this->type = 'input';
        $this->input_type = $type;
        return $this;
    }

    /**
     * @param int $rows
     * @return $this
     */
    public function textarea($rows = 2)
    {
        $this->type = 'textarea';
        $this->textarea_rows = $rows;
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function select($options = [])
    {
        $this->type = 'select';
        $this->options($options);
        return $this;
    }

    /**
     * @return $this
     */
    public function checkbox()
    {
        $this->type = 'checkbox';
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function checkboxs($options = [])
    {
        $this->type = 'checkboxs';
        $this->options($options);
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function radio($options = [])
    {
        $this->type = 'radio';
        $this->options($options);
        return $this;
    }

    /**
     * @param $default
     * @return $this
     */
    public function default($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @param $autocomplete
     * @return $this
     */
    public function autocomplete($autocomplete)
    {
        $this->autocomplete = $autocomplete;
        return $this;
    }

    /**
     * @param $placeholder
     * @return $this
     */
    public function placeholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @param $help
     * @return $this
     */
    public function help($help)
    {
        $this->help = $help;
        return $this;
    }

    /**
     * @param $rules
     * @return $this
     */
    public function rules($rules)
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * @param $view
     * @return $this
     */
    public function view($view){
        $this->view = $view;
        return $this;
    }

    /**
     * @param $options
     */
    protected function options($options)
    {
        $this->options = Arr::isAssoc($options) ? array_flip($options) : array_combine($options, $options);
    }
}
