<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('edificios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->char('id_institution', 36);
            $table->foreign('id_institution')->references('id_institution')->on('institutions')->onDelete('cascade');
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('edificios');
    }
};
