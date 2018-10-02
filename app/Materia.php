<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['materia', 'seccion', 'crn', 'salon'];
    //protected $guarded = ['id', 'created_at', 'updated_at'];
}
