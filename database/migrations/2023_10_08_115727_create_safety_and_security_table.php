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
        Schema::create('safety_and_security', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flying_lesson_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('flight_number');
            $table->date('date');
            $table->integer('degree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safety_and_security');
    }
};
