<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('estagiarios', function (Blueprint $table) {
            $table->string('carta')->nullable()->after('observacoes');
            $table->string('status')->default('Ativo')->after('carta');
        });
    }

    public function down(): void
    {
        Schema::table('estagiarios', function (Blueprint $table) {
            $table->dropColumn(['carta', 'status']);
        });
    }

};
