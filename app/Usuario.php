<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'usuario';

    protected $fillable = [

        'login',
        'senha',
        'tipo'

    ];

    public function isProfessor() {

        if ($this->tipo == 'prof')
            return true;
        return false;

    }

    public function dados() {

        if ($this->tipo == 'prof')

            return $this->hasOne('App\Professor', 'usuario_id');

        return $this->hasOne('App\Aluno', 'usuario_id');

    }


}
