<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUtilizadorSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('tipo_utilizador')->insert([
            'tipo' =>'administrador',
            'descricao' => 'Utilizador que faz administração do sistema',
        ]);
        DB::table('tipo_utilizador')->insert([
            'tipo' =>'utilizador_normal',
            'descricao' => 'Utilizador que faz normal do sistema',
        ]);
    }
}
