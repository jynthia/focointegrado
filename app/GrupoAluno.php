<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GrupoAluno extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'grupo_aluno';

    protected $fillable = [

        'grupo_id',
        'aluno_id',

    ];

    public function aluno() {

        return $this->belongsTo('App\Aluno', 'aluno_id');

    }

    public function grupo() {

        return $this->belongsTo('App\Grupo', 'grupo_id');

    }
}
