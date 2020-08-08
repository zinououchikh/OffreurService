<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreurService extends Model
{
    protected $guarded = [];
    protected $fillable = ['name','biographgy','email','tel'];
}
