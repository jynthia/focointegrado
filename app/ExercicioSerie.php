<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExercicioSerie extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'exercicio_serie';

    protected $fillable = [

        'sets',
        'reps',
        'rest',
        'exercicio_id',
        'serie_id'

    ];

    public function exercicio() {

        return $this->belongsTo('App\Exercicio', 'exercicio_id')->first()->nome;

    }

    public function serie() {

        return $this->belongsTo('App\Serie', 'serie_id')->first();

    }

}
