<?php

namespace App\Controllers;

class Proprietario extends BaseController
{
    public function __construct(){
        $this->usuarioModel = new \App\Models\ProprietarioModel();
    }

    public function index()
    {
        $data = [
            'titulo' => "Listar proprietários",
        ];
        return view('Proprietarios/index', $data);
    }

    
}
