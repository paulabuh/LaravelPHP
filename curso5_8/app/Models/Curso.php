<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $attributes = ['ativo'=>1, 'status'=>1];

    public function getAtivoAttribute($attibute){
        return [
            0 => 'Desativado',
            1 => 'Ativo'
        ][$attibute];
    }

    public function getStatusAttribute($attibute){
        return [
            0 => 'Indisponível',
            1 => 'Cancelado',
            2 => 'Inscrições Abertas'
        ][$attibute];
    }

}
