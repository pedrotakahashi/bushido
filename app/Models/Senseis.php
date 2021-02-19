<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Senseis extends Model
{
    protected $fillable=['id','nome', 'nascimento', 'email','cpf',
                         'rua','cep','bairro','cidade'];
}
