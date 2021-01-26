<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends AbstractModel
{
    use HasFactory;


    protected $guarded = ['id','status'];

    public function user(){
        return $this->hasOne(User::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
