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
        Schema::create('aviation_accident_violatios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_paper_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('date');
            $table->foreignId('section_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('aircraft_type');
            $table->integer('aircraft_number');

            ///////////////////////

            $table->integer('flight_hours_before_the_violation');
            $table->longText('description_of_the_violation');
            $table->longText('penalty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aviation_accident_violatios');
    }
};
