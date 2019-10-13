<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //

    public function getLogin() {

        return view('login');

    }

    public function index() {

        return view('index');

    }

    public function contato() {

        return view('contato');
    }

    public function programas() {

        return view('programas');
    }

    public function education() {

        return view('education');
    }

}
