<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Forms;


use Illuminate\Support\Str;

class Field extends BaseField
{

    protected $label;
    protected $key;
    protected $file_multiple;
    protected $array_fields = [];
    protected $arry_sortable = false;

    /**
     * Field constructor.
     * @param $label
     * @param $name
     */
    public function __construct($label, $name)
    {
        $this->label = $label;
        $this->name = $name ?? Str::snake(Str::lower($label));
        $this->key = sprintf("form_data.%s", $this->name);
    }

    /**
     * @param $label
     * @param null $name
     * @return static
     */
    public static function make($label, $name = null)
    {
        return new static($label, $name);
    }

    /**
     * @return $this
     */
    public function file()
    {
        $this->file = 'file';
        return $this;
    }

    /**
     * @return $this
     */
    public function multiple()
    {
        $this->file_multiple = true;
        return $this;
    }

    /**
     * @param array $fields
     * @return $this
     */
    public function array($fields = [])
    {
        $this->type = 'array';
        $this->array_fields = $fields;
        return $this;
    }

    /**
     * @return $this
     */
    public function sortable()
    {
        $this->arry_sortable = true;
        return $this;
    }

}
