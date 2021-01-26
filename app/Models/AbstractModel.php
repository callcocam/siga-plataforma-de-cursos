<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Models;


use App\Scopes\UuidGenerate;
use Illuminate\Database\Eloquent\Model;

class AbstractModel extends Model
{

    use UuidGenerate;

    protected $keyType = 'string';
    public $incrementing = false;

    const DELETED = "deleted";
    const DRAFT = "draft";
    const REVISION = "revision";
    const PUBLISHED = "published";



    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
