<?php

namespace BancoTalentos\Models;

use Illuminate\Database\Eloquent\Model;

class Talento extends Model
{
    protected $fillable = ['nome','matricula','instituto','funcao','atividade'];
}
