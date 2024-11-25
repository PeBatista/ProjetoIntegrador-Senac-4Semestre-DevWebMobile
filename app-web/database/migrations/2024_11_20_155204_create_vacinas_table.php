<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vacinas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_vacina')->nullable();
            $table->date('data_aplicacao')->nullable();
            $table->string('lote',length:50)->nullable();
            $table->string('fabricante')->nullable();
            $table->text('descricao')->nullable();
            $table->text('local_aplicacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacinas');
    }
};
