<?php

namespace App\Http\Controllers;

use App\ExercicioSerie;
use Illuminate\Http\Request;
use App\Professor;
use App\Exercicio;
use App\Modalidade;
use App\Academia;
use App\Atratores;
use App\Genero;
use App\Bioimpedancia;
use App\TreinoBase;
use App\Ficha;

class PaginasProfessorController extends Controller
{
    public function getIndex() {

        $professor = Professor::find(7);
        $fichas_ativas = $professor->fichas;
        $alunos = $professor->alunos;
        $exercicios = Exercicio::all()->count();
        $grupos = $professor->grupos;
        $modalidades = Modalidade::all();
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
            'titulo' => 'Início',
            'locais_treino' => $locais_treino,
            'generos' => $generos
        );
        return view('prof.index')->withDados($dados);

    }

    public function getExercicios() {

        $exercicios = Exercicio::all();

        $dados = array (

            'exercicios' => $exercicios,
            'titulo' => 'Exercícios'

        );

        return view('prof.exercicios')->withDados($dados);
    }

    public function getPerfil() {

        $professor = Professor::find(7);
        $usuario = $professor->usuario;

        $dados = array(

            'professor' => $professor,
            'usuario' => $usuario,
            'titulo' => 'Meu Perfil'
        );
//  TODO: titulo nao ta funcionando
        return view('prof.perfil')->withDados($dados);

    }

    public function getAtratores() {

        $professor = Professor::find(7);
        $alunos = $professor->alunos;
        $atratores = Atratores::where('cadastrado_por', $professor->usuario_id)->orderBy('created_at', 'desc')->get();

        $dados = array(

            'titulo' => 'Atratores e Biomecânica',
            'alunos' => $alunos,
            'atratores' => $atratores

        );
        return view('prof.atratores')->withDados($dados);

    }

    public function getBioimpedancia() {

        $professor = Professor::find(7);
        $alunos = $professor->alunos;
        $bioimpedancias = Bioimpedancia::where('cadastrado_por', $professor->usuario_id)->orderBy('created_at', 'desc')->get();

        $dados = array(

            'titulo' => 'Avaliações de Bioimpedância',
            'bioimpedancias' => $bioimpedancias,
            'alunos' => $alunos
        );

        return view('prof.bioimpedancia')->withDados($dados);

    }

    public function getFichas() {
        $professor = Professor::find(7);
        $alunos = $professor->alunos;
        $fichas_aluno = Ficha::where('cadastrado_por', $professor->usuario_id)->where('grupo_id', NULL)->orderBy('created_at', 'desc')->get();
        $exercicios = Exercicio::all();


        $dados = array(

            'titulo' => 'Fichas de Treino - Alunos',
            'alunos' => $alunos,
            'fichas' => $fichas_aluno,
            'exercicios' => $exercicios

        );
        return view('prof.fichas')->withDados($dados);

    }

    public function getFichasGrupo() {
        $professor = Professor::find(7);
        $grupos = $professor->grupos;
        $exercicios = Exercicio::all();
        $fichas_grupo = Ficha::where('cadastrado_por', $professor->usuario_id)->where('aluno_id', NULL)->orderBy('created_at', 'desc')->get();


        $dados = array(

            'titulo' => 'Fichas de Treino - Grupos',
            'grupos' => $grupos,
            'exercicios' => $exercicios,
            'fichas' => $fichas_grupo

        );

        return view('prof.fichas_grupo')->withDados($dados);

    }

    public function getDiarios() {

        $dados = array(

            'titulo' => 'Diários de treino'

        );
        return view('prof.diarios')->withDados($dados);

    }

    public function getPlanejamento() {

        $dados = array(

            'titulo' => 'Planejamento'

        );
        return view('prof.planejamento')->withDados($dados);

    }

    public function getDiariosAluno($id) {

        $dados = array(
            'titulo' => $id
        );

        return view('prof.diario_aluno')->withDados($dados);
    }


}
