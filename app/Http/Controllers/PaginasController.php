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

}
