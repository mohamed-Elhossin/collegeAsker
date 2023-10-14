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
        Schema::create('student_papers', function (Blueprint $table) {
            $table->id();
            $table->string('rank');
            $table->string('name');
            $table->string('img');
            $table->foreignId('section_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('started_at');
            $table->date('ended_at');
            $table->string('aircraft_type');
            $table->longText('comments');
            $table->string('teachers_name');
            $table->date('from');
            $table->date('to');
            $table->longText('teachers_comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_papers');
    }
};
