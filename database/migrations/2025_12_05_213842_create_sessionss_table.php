<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sessionss', function (Blueprint $table) { // Fixed name
            $table->id();
            $table->string('salle');
            $table->date('date_session');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade');
            $table->foreignId('module_id')->constrained()->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};