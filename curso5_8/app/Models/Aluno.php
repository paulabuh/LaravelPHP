<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['ra','nome','sobrenome','nomeCompleto','endereco'];

    public function scopeAlunosComRA($query){
        return $query->where('ra','<>',0);
    }
}
