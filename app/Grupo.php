<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Grupo extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'grupo';

    protected $fillable = [

        'horario',
        'modalidade_id',
        'professor_id'

    ];

    public function nome() {

        return 'Grupo ' . $this->modalidade() . ' - ' . $this->horario;

    }
    public function professor() {

        return $this->belongsTo('App\Professor', 'professor_id');

    }

    public function modalidade() {

        if($this->modalidade_id != NULL)
            return $this->belongsTo('App\Modalidade')->first()->nome;

        return 'Não cadastrado';

    }

    public function alunos() {

        return $this->hasMany('App\GrupoAluno', 'grupo_id');

    }
}
