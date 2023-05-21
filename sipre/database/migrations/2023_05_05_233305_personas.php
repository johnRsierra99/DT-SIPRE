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
    Schema::create('personas', function (Blueprint $table) {
    $table->unsignedBigInteger('id')->unique();
    $table->string('nombre');
    $table->string('correo',100)->unique();
    $table->unsignedBigInteger('programa_id');
    $table->unsignedBigInteger('rol_id');
    $table->string('estado');
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
