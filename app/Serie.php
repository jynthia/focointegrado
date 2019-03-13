<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'serie';

    protected $fillable = [

        'nome',
        'treino_id'

    ];

    public function exerciciosDaSerie() {

        return $this->hasMany('App\ExercicioSerie', 'serie_id');

    }

    public function treino() {

        return $this->belongsTo('App\TreinoBase', 'treino_id');

    }


}
