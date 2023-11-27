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
        Schema::table('feiras', function (Blueprint $table) {
            $table->id()->nullable;
            $table->string('nome',100);
            $table->text('localizacao');
            $table->string('dataInicio')->nullable;
            $table->string('dataFim')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feiras', function (Blueprint $table) {
            //
        });
    }
};