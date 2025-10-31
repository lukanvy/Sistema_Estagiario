<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estagiarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('curso');
            $table->integer('ano');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->string('supervisor');
            $table->string('alocacao');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estagiarios');
    }
};
