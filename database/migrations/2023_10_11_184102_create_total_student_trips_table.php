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
        Schema::create('total_student_trips', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('teacher');
            // $table->string('lesson');
            $table->foreignId('flying_lesson_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->float('double' , 8 , 4);
            $table->float('double_total' , 8 , 4);
            $table->float('single' , 8 , 4);
            $table->float('single_total' , 8 , 4);
            $table->float('total_summation' , 8 , 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_student_trips');
    }
};
