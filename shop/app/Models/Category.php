<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use  Translatable;

    public $translatedAttributes = ['name', 'description', 'slug'];

    protected $fillable = ['status'];

    protected $casts = ['status' => 'boolean'];

}
