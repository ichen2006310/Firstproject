<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class firstproject extends Model
{
    protected $table = 'firstproject';
    protected $fillable = ['title','description','email'];
}
