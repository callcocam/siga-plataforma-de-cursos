<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends AbstractModel
{
    use HasFactory;

    protected $guarded = ['id'];

    public function imageable()
    {
        return $this->morphTo();
    }

}
