<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notfication extends Model
{
    use HasFactory;

    const DELETED = "deleted";
    const DRAFT = "draft";
    const REVISION = "revision";
    const PUBLISHED = "published";

    protected $guarded = ['id','status'];

    public function user(){
        return $this->hasOne(User::class);
    }

}
