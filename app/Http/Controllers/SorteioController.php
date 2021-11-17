<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SorteioController extends Controller
{
    private $totalPage = 5;

    public function index()
    {
        $dados = $this->sorteio->paginate($this->totalPage);
        return view('sorteios', compact('dados'));
    }

    
}

