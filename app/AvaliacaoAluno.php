<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class AvaliacaoAluno extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'avaliacao_aluno';

    protected $fillable = [

        'objetivo',
        'atividades',
        'dores',
        'limitacoes',
        'escala_dor',
        'medicamento',
        'cirurgia',
        'historico',
        'aluno_id',
        'cadastrado_por'
    ];

    public function aluno() {

        return $this->belongsTo('App\Aluno', 'aluno_id')->first()->nome;

    }

    public function cadastradoPor() {

        return $this->belongsTo('App\User', 'cadastrado_por')->first()->name;

    }
}
