<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class Crudl extends Model
{
    use UuidTrait;

    public $incrementing = false;
    protected $primaryKey = 'uuid';
    protected $fillable = [
    	'content',
    	'title',
    	'thumbnail'
    ];
}
