<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InquilinosFakerSeeder extends Seeder
{
    public function run()
    {
        $proprietarioModel = new \App\Models\ProprietarioModel();

        //instanciar
        $faker = \Faker\Factory::create();

        $criarQuantosUsuarios = 2000;

        $usuariosPush = [];

        for ($i = 0; $i < $criarQuantosUsuarios; $i++) {

            array_push(
                $usuariosPush,[
                    'nome' => $faker->unique()->name,
                    'email' => $faker->unique()->email,
                    'password_hash' => '123456',
                    // alterar o faker seeder quando ver hash/criptografia
                    'ativo' => $faker->numberBetween(0,1), // Criar usuários ativos e inativos
                ]
            );

        }

        $InquilinosModel->skipValidation(true) // bypass pela validação
                     ->protect(false) // bypass pelo AllowedFields do model para adicioanr a coluna ativo
                     ->insertBatch($usuariosPush);

        echo "$criarQuantosUsuarios usuarios criados com sucesso!";
    }
}
