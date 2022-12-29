<?php

namespace App\Models;

use CodeIgniter\Model;

class ProprietarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'proprietarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    //Colocar as colunas novas em que os dados são permitidos ser manipulados, foi retirado ID porque é auto increment e coluna ATIVO
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
    protected $useTimestamps = true; //Ativando vai deixar os campos (colunas) abaixo sendo atualizados automatico pelo CI4, quando houver alteração vai ser colocado
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
