<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Academia extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'academia';

    protected $fillable = [


        'endereco',
        'nome',
        'telefone'

    ];

    public function alunos() {

        return $this->hasMany('App\Aluno', 'local_treino_id');

    }

    public function professores() {

        return $this->hasMany('App\Professor', 'local_treino_id');

    }

}
