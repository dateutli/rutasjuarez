<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'color'];
    protected $hidden = [];
}