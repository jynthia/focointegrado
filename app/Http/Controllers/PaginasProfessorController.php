<?php

namespace App\Http\Controllers;

use App\AvaliacaoAluno;
use Illuminate\Http\Request;
use App\Professor;
use App\Exercicio;
use App\Modalidade;
use App\HorarioAluno;
use App\Academia;
use App\Genero;


class PaginasProfessorController extends Controller
{
    public function getIndex() {

        $professor = Professor::find(7);
        $fichas_ativas = $professor->fichas;
        $alunos = $professor->alunos;
        $exercicios = Exercicio::all()->count();
        $grupos = $professor->grupos;
        $modalidades = Modalidade::all();
//        $avaliacoes = AvaliacaoAluno::all();
        $horarios = HorarioAluno::all();
        $locais_treino = Academia::all();
        $generos = Genero::all();

//        TODO: falta inserir uma função no controller para carregar a frequencia do aluno e se a ficha está ativa ou nao

        $dados = array(

            'professor' => $professor,
            'fichas_ativas' => $fichas_ativas,
            'alunos' => $alunos,
            'exercicios' => $exercicios,
            'modalidades' => $modalidades,
            'grupos' => $grupos,
//            'avaliacoes' => $avaliacoes,
            'horarios' => $horarios,
            'titulo' => 'Início',
            'locais_treino' => $locais_treino,
            'generos' => $generos
        );
        return view('prof.index')->withDados($dados);

    }

    public function getPerfil() {

        $professor = Professor::find(7);
        $usuario = $professor->usuario;

        $dados = array(

            'professor' => $professor,
            'usuario' => $usuario,
            'titulo' => 'Meu Perfil'
        );

        return view('prof.perfil')->withDados($dados);

    }

    public function getAtratores() {

        return view('prof.atratores');

    }

    public function getBioimpedancia() {

        return view('prof.bioimpedancia');

    }

    public function getFichas() {

        return view('prof.fichas');

    }

    public function getFichasGrupo() {

        return view('prof.fichas_grupo');

    }


}
