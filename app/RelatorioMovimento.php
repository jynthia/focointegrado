<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RelatorioMovimento extends Model
{
    //

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'relatorio_movimento';

    protected $fillable = [

        'relatorio',
        'planejamento_base',
        'it_iluminator',
        'aluno_id',
        'cadastrado_por'

    ];

    public function cadastradoPor() {

        return $this->belongsTo('App\Usuario', 'cadastrado_por');

    }

    public function aluno() {

        return $this->belongsTo('App\Aluno', 'aluno_id');

    }

}
