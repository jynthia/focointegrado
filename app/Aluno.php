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
        'profissao',
        'local_treino_id',
        'genero_id',
        'modalidade_id',
        'professor_id',
        'usuario_id'

    ];
// Retorna id do professor relativo ao aluno
    public function professor() {

        return $this->belongsTo('App\Professor')->first()->id;

    }
// Retorna nome do local de treino
    public function academia() {

        return $this->belongsTo('App\Academia', 'local_treino_id')->first()->nome;

    }
// Retorna genero do aluno
    public function genero() {

        return $this->belongsTo('App\Genero')->first()->nome;

    }
// Se tiver modalidade cadastrada, retorna o nome da mesma
    public function modalidade() {

        if($this->modalidade_id != NULL)
            return $this->belongsTo('App\Modalidade')->first()->nome;

        return 'Não cadastrado';

    }

    // Retorna login do aluno
    public function usuario() {

        return $this->belongsTo('App\Usuario', 'usuario_id')->first()->login;

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

        return $this->hasOne('App\HorarioAluno', 'aluno_id')->first()->id;

    }

    public function avaliacao() {

        return $this->hasOne('App\AvaliacaoAluno', 'aluno_id')->first()->id;
    }

//  Retorna o ID do grupo que o aluno faz parte, se fizer, do contrário retorna falso.
    public function isGrupo()
    {

        $teste = $this->hasOne('App\GrupoAluno', 'aluno_id')->first()->id;
        if($teste)
            return $teste;
        return false;

    }
}
