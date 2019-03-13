<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use App\Exercicio;

class PaginasProfessorController extends Controller
{
    public function getIndex() {

        $professor = Professor::find(7);
        $fichas_ativas = $professor->fichas;
        $alunos = $professor->alunos;
        $exercicios = Exercicio::all()->count();
        $grupos = $professor->grupos;
        $dados = array(

            'professor' => $professor,
            'fichas_ativas' => $fichas_ativas,
            'alunos' => $alunos,
            'exercicios' => $exercicios
        );
        return view('prof.index')->withDados($dados);

    }

    public function getPerfil() {

        return view('prof.perfil');

    }

    public function getAvaliacoes() {

        return view('prof.avaliacoes');

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
