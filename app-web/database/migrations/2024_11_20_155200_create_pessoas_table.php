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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', length:25);
            $table->date('data_nascimento');
            $table->string('cpf', length:14)->unique();
            $table->text('endereco');
            $table->string('senha');
            $table->string('cep', length:10);
            $table->string('cns', length:20);
            $table->string('rg', length:10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
