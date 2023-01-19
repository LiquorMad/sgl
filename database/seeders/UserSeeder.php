<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'idTipoUtilizador' => 1

        ]);
        DB::table('users')->insert([
            'name' =>'Normal',
            'email' => 'normal@gmail.com',
            'password' => Hash::make('password'),
            'idTipoUtilizador' => 2
        ]);
    }
}
