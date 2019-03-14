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

        return $this->belongsTo('App\Modalidade', 'modalidade_id')->first()->nome;

    }

    public function alunos() {

        return $this->hasMany('App\GrupoAluno', 'grupo_id');

    }
}
