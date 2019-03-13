<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use App\Exercicio;
use App\Modalidade;

class PaginasProfessorController extends Controller
{
    public function getIndex() {

        $professor = Professor::find(7);
        $fichas_ativas = $professor->fichas;
        $alunos = $professor->alunos;
        $exercicios = Exercicio::all()->count();
        $grupos = $professor->grupos;
        $modalidades = Modalidade::all();
        $dados = array(

            'professor' => $professor,
            'fichas_ativas' => $fichas_ativas,
            'alunos' => $alunos,
            'exercicios' => $exercicios,
            'modalidades' => $modalidades
        );
        return view('prof.index')->withDados($dados);

    }

    public function getPerfil() {

        $professor = Professor::find(7);
        $usuario = $professor->usuario;

        $dados = array(

            'professor' => $professor,
            'usuario' => $usuario
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
