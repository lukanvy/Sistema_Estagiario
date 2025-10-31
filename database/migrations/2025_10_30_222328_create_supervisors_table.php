<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();

          
            $table->string('codigo', 20)->unique(); 

           
            $table->string('nome', 150);

           
            $table->string('cargo', 100);

           
            $table->string('area_formacao', 100)->nullable();

            
            $table->string('area_actuacao', 100);

           
            $table->text('tarefas');

            $table->timestamps(); 
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('supervisors');
    }
};