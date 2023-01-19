<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->string('descricao')->nullable();
            $table->foreignId('idFonte')->references('id')->on('fontes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('links');
    }
};
