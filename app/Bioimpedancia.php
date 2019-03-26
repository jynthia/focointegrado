<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bioimpedancia extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'bioimpedancia';

    protected $fillable = [

        'data',
        'peso',
        'altura',
        'gordura_atual',
        'massa_magra',
        'metabolismo_basal',
        'agua_gordura_visceral',
        'massa_ossea',
        'freq_repouso',
        'pa_sistolica',
        'pa_diastolica',
        'hrvariability_recovery',
        'rmssd',
        'romain_chair_bi',
        'romain_chair_uni',
        'cmj',
        'sj',
        'rsi_stifness',
        'rsi_drop_jump',
        'indice_bosco',
        'horizontal_jump',
        'sl_hop',
        'triple_hop',
        'cross_over',
        'm_timed',
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
