<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercicio extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'exercicio';

    protected $fillable = [


        'nome',
        'url',
        'modalidade_id',
        'cadastrado_por'

    ];

    public function modalidade() {

        if($this->modalidade_id != NULL)
            return $this->belongsTo('App\Modalidade')->first()->nome;
        return 'Não cadastrado';
    }

    public function cadastradoPor() {

        return $this->belongsTo('App\Usuario', 'cadastrado_por')->first()->login;

    }

}
