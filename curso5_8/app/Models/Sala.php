<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['nome','ativo','projetor','qtdAlunos'];
    //protected $guarded = ['qtdAlunos'];

    protected $attributes = ['ativo'=>1];

    public function getAtivoAttribute($attibute){
        return [
            0 => 'Desativado',
            1 => 'Ativo'
        ][$attibute];
    }

    public function scopeTemAlunos($query){
        return $query->where('qtdAlunos','>',0);
    }

    public function scopeTemMaisDeVinteAlunos($query){
        return $query->where('qtdAlunos','>',20);
    }
}
