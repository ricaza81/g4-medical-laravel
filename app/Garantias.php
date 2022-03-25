<?php

namespace App;

use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;

class Garantias extends Model
{
    //
    protected $table = 'garantias';

    protected $fillable = ['id_departamento','id_ciudad','usuario','email','ref_color','codigo']; 

}