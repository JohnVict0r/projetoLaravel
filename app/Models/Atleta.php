<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $table = 'atleta';

    protected $fillable= ['nome','idade','titulos'];
}
