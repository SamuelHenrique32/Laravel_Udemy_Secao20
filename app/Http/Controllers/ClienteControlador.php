<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;            //modelo

class ClienteControlador extends Controller
{
    /*
    public function index()
    {
        //$clientes = Cliente::all();
        //10 itens por vez
        $clientes = Cliente::paginate(10);
        return view('index', compact('clientes'));
    }*/

    public function indexjs()
    {

        return view('indexjs');
    }

    public function indexjson()
    {

        return Cliente::paginate(10);
    }
}
