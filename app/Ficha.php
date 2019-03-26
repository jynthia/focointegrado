<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ficha extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'ficha';

    protected $fillable = [

        'qtd_treino',
        'cadastrado_por',
        'titulo',
        'data_inserida',
        'data_vencimento',
        'modalidade_id',
        'aluno_id',
        'grupo_id'

    ];

    public function treinos() {

        return $this->hasMany('App\TreinoBase', 'ficha_id')->get();

    }

    public function aluno() {

        return $this->belongsTo('App\Aluno', 'aluno_id')->first()->nome;

    }

    public function modalidade() {

        return $this->belongsTo('App\Modalidade')->first()->nome;

    }

    public function cadastradoPor() {

        return $this->belongsTo('App\User', 'cadastrado_por')->first()->name;

    }

    public function isGrupo() {

        if($this->grupo_id == NULL) {

            return false;
        }
        return true;

    }

    public function destinatario() {

        if($this->aluno_id) {

            return $this->belongsTo('App\Aluno', 'aluno_id')->first()->nome;

        }
        $horario = $this->belongsTo('App\Grupo', 'grupo_id')->first()->horario;
        $modal = $this->modalidade();
        return "Grupo $modal - $horario";

    }


}
