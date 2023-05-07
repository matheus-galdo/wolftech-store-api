<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps  = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'name', 'description', 'price', 'imageUrl'
    ];
    //
}