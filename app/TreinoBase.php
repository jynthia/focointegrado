<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TreinoBase extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'treino_base';

    protected $fillable = [

        'nome',
        'data_inserida',
        'data_vencimento',
        'modalidade_id',
        'grupo_id',
        'cadastrado_por',
        'aluno_id'

    ];

    public function modalidade() {

        return $this->belongsTo('App\Modalidade');

    }

    public function cadastradoPor() {

        return $this->belongsTo('App\Usuario', 'cadastrado_por');

    }

    public function isGrupo() {

        if($this->grupo_id == NULL) {

            return false;
        }
        return true;

    }

    public function destinatario() {

        if($this->aluno_id) {

            return $this->belongsTo('App\Aluno', 'aluno_id');

        }

        return $this->belongsTo('App\Grupo', 'grupo_id');

    }

    public function series() {

        return $this->hasMany('App\Serie', 'treino_id');
    }
}
