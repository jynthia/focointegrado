<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{

    use SoftDeletes;

    // Definição da coluna deleted_at como data
    protected $dates = ['deleted_at'];

    // Definição da tabela no singular como está no banco de dados
    protected $table = 'professor';

    // Torna esses campos disponíveis para inserção em massa
    protected $fillable = [

        'nome',
        'CPF',
        'email',
        'usuario_id'

    ];

    public function alunos() {

        return $this->hasMany('App\Aluno');

    }

    public function academia() {

        return $this->belongsTo('App\Academia', 'local_treino_id');

    }

    public function usuario() {

        return $this->belongsTo('App\Usuario', 'usuario_id');

    }

}
