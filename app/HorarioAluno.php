<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HorarioAluno extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'horario_aluno';

    protected $fillable = [

        'acordar',
        'trabalho',
        'estudo',
        'treino',
        'dormir',
        'aluno_id',
        'cadastrado_por'

    ];

    public function aluno () {

        return $this->belongsTo('App\Aluno', 'aluno_id')->first()->nome;

    }

    public function cadastradoPor () {

        return $this->belongsTo('App\User', 'cadastrado_por')->first()->name;

    }

}
