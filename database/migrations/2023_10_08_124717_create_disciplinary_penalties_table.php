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
        Schema::create('disciplinary_penalties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_paper_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('Date_of_violation');
            $table->string('The_nature_of_the_violation');
            $table->longText('penalty');
            $table->longText('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinary_penalties');
    }
};
