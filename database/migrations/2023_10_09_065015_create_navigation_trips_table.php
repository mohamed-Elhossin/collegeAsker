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
        Schema::create('navigation_trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_paper_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('flight_number');
            $table->date('date');
            $table->string('itinerary');

            $table->integer('height');
            $table->integer('distance');
            $table->float('time', 8, 5);
            $table->boolean('morning_or_night')->comment('0 => morning , 1 => night');
            // $table->string('status');

            $table->float('double', 8, 5);

            $table->float('single', 8, 5);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navigation_trips');
    }
};
