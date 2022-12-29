<?php

namespace App\Controllers;

class Inquilinos extends MyController
{
    public function __construct(){
        $this->inquilinosModel = new \App\Models\InquilinosModel();
    }

    public function index()
    {
        $data = [
            'titulo' => "Listar inquilinos",
        ];
        return view('Inquilinos/index', $data);
    }

    public function recuperainquilinos(){
        //if (!$this->request->isAJAX()){
         //   return redirect()->back();
        //}

        $colunas = [
            "id",
            "nome",
            "email",
            "situacao",
            "imagem",
        ];
        $usuarios = $this->inquilinosModel->select($colunas)
                                          ->findAll();
                                            dd($usuarios);
    }

    public function cadastrar(){
        return view('inquilinos/cadastrar');
    }
}