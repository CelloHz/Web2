<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function listar()
    {
        return view('admin.agenda.listar');
    }


    public function adicionar()
    {
        return view('admin.agenda.form');
    }
}
