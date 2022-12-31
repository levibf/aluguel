<?php

namespace App\Models;

use CodeIgniter\Model;

class InquilinosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'inquilinos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    //Opção importante para os dados retornarem como objetos
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "nome",
        "endereco",
        "telefone",
        "data_nascimento",
        "email",
        "password",
        "reset_hash",
        "reset_expira_em",
        "imagem",
    ];
    
    // Dates
    protected $useTimestamps = true; //Atualiza os campos abaixo
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
