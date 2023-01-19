<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FontesSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('fontes')->insert([
            'endereco' =>'https://laravel.com/',
            'descricao' => 'Site do framework Laravel',
        ]);
        DB::table('fontes')->insert([
            'endereco' =>'https://reactjs.org/',
            'descricao' => 'Site xda biblioteca ReactJS',
        ]);
        DB::table('fontes')->insert([
            'endereco' =>'https://svelte.dev/',
            'descricao' => 'Site do Svelt',
        ]);
        DB::table('fontes')->insert([
            'endereco' =>'https://vuejs.org/',
            'descricao' => 'Site do framework  Vue.Js',
        ]);
        
        
       
    }
}
