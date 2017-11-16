<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $fillable = ['recipe_name','recipe_source']; //'yield','servings','instructions','notes','tested','rating'];
}
