<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasProfessorController extends Controller
{
    public function getIndex() {

        return view('prof/index');

    }

    public function getPerfil() {

        return view('prof/perfil');

    }

    public function getAvaliacoes() {

        return view('prof/avaliacoes');

    }

    public function getBioimpedancia() {

        return view('prof/bioimpedancia');

    }

    public function getFichas() {

        return view('prof/fichas');

    }

    public function getFichasGrupo() {

        return view('prof/fichas_grupo');

    }


}
