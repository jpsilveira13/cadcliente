<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    public $table ='Usuario';
    protected $fillable = [
        'nome', 'email', 'senha',
    ];


}
