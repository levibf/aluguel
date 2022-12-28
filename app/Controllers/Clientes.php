<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => "Proprietários de Aluguel",
        ];
        return view('Home/index', $data);
    }
}
