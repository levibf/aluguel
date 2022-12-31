<?php

namespace App\Controllers;

class Inquilinos extends BaseController
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
        if (!$this->request->isAJAX()){
            return redirect()->back();
        }

        $colunas = [
            "id",
            "nome",
            "email",
            "ativo",
            "imagem",
        ];

        $inquilinos = $this->inquilinosModel->select($colunas)
                                          ->findAll();
        
        
        //Receberá array formatado para aJax
        $data = [];

        

        foreach($inquilinos as $inquilino){
            $nomeUsuario = esc($inquilino->nome);

            $data[] = array(
                'nome' => anchor("inquilinos/exibir/$inquilino->id", esc($inquilino->nome), 'title="Editar usuário"'),
                'email' => esc($inquilino->email),
                'ativo' => ($inquilino->ativo == true ? 'Ativo' : '<span class="text-warning">Inativo</span>'),
            );
        }

        $retorno = [
            'data' => $data,
        ];
        // echo '<pre>';
        // print_r($retorno);
        // exit;
        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null){
        $inquilino = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Detalhes inquilino ". esc($inquilino->nome),
            'inquilino' => $inquilino,
        ];

        //dd($inquilino);
        return view('Inquilinos/exibir', $data);
    }

    private function buscaUsuarioOu404(int $id = null){

        if(! $id || !$inquilino = $this->inquilinosModel->withDeleted(true)->find($id)){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não foi encontrado o inquilino $id");
        }

        return $inquilino;

    }
}