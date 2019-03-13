<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'aluno';

    protected $fillable = [

        'nome',
        'nascimento',
        'matricula',
        'cpf',
        'contato',
        'email',
        'endereco',
        'estado_civil',
        'idade',
        'local_treino_id',
        'genero_id',
        'modalidade_id',
        'professor_id',
        'usuario_id'

    ];

    public function professor() {

        return $this->belongsTo('App\Professor');

    }

    public function academia() {

        return $this->belongsTo('App\Academia', 'local_treino_id');

    }

    public function genero() {

        return $this->belongsTo('App\Genero');

    }

    public function modalidade() {

        if($this->modalidade_id != NULL)
            return $this->belongsTo('App\Modalidade')->first()->nome;
        else
            return 'Não cadastrado';

    }

    public function usuario() {

        return $this->belongsTo('App\Usuario', 'usuario_id');

    }

    public function relatoriosDeMovimento() {

        return $this->hasMany('App\RelatorioMovimento', 'aluno_id');

    }

    public function bioimpedancias() {

        return $this->hasMany('App\Bioimpedancia', 'aluno_id');

    }
    public function atratores() {

        return $this->hasMany('App\Atratores', 'aluno_id');

    }


    public function horarios() {

        return $this->hasOne('App\HorarioAluno', 'aluno_id');

    }

    public function avaliacao() {

        return $this->hasOne('App\AvaliacaoAluno', 'aluno_id');
    }

    public function isGrupo()
    {

        $teste = $this->hasOne('App\GrupoAluno', 'aluno_id');
        if($teste)
            return $teste;
        return false;

    }
}
