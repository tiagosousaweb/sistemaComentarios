<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        return view('usuarios.index');
    }

    public function show($id)
    {
        return view('usuarios.show');
    }
}
