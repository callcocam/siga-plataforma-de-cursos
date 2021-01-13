<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Forms\Traits;


use Illuminate\Support\Facades\Schema;

trait FillsColumns
{

    public function getFillible(){

        return Schema::getColumnListing($this->getTable());
    }
}
