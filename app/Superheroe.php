<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    protected $fillable = ['nombre','poder','creador','villano'];
}
