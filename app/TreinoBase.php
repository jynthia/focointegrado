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
        'cadastrado_por',
        'ficha_id',
        'warmup'

    ];

    public function cadastradoPor() {

        return $this->belongsTo('App\User', 'cadastrado_por')->first()->name;

    }

    public function series() {

        return $this->hasMany('App\Serie', 'treino_id');
    }

    public function ficha() {

        return $this->hasOne('App\Ficha', 'ficha_id');
    }
}
