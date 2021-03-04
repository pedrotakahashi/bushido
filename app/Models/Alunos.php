<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable=['id','nome', 'sobrenome','email','senha','graduacao','data-nascimento', 'cpf',
    'rua','cep','bairro','cidade'];
}
