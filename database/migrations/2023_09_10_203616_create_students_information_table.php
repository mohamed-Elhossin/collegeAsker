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
        Schema::create('students_information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('military_number');
            $table->string('batch');
            $table->integer('medical_fitness');
            $table->date('date_of_joining_the_college');
            $table->date('flight_start_date');

            $table->date('date_of_birth');
            $table->string('Place_of_birth');
            $table->string('Governorate');

            $table->string('fathers_name');
            $table->string('fathers_job');

            $table->string('mothers_name');
            $table->string('mothers_job');

            $table->string('fathers_address');
            $table->string('fathers_phone');

            $table->string('name_of_the_closest_person');
            $table->string('the_closest_person_jop');
            $table->string('the_closest_person_phone');

            $table->string('number_of_family_members');
            $table->string('number_of_brothers');
            $table->tinyInteger('males');
            $table->tinyInteger('females');

            $table->longText('brothers_jop');

            $table->boolean('parents_separated')->comment('0 => yes , 1 => no');
            $table->date('date_of_separation')->nullable();
            $table->bigInteger('family_income_per_month');
            $table->longText('sources_of_income');
            $table->string('latest_academic_qualification');
            $table->date('date_of_obtaining_the_latest_academic_qualifications');

            $table->string('section');
            $table->string('the_entity_from_which_he_obtained_a_qualification');
            $table->integer('percentage_in_high_school');

            $table->boolean('first_foreign_language')->comment('0 => english , 1 => frensh');

            $table->integer('degree_he_earned');
            $table->integer('the_number_of_years_of_schooling_in_high_school');
            $table->longText('sports_tournaments');
            $table->longText('hobbies');
            $table->tinyInteger('the_students_desire_to_fly')->comment('0 => Fighters  , 1 => helicopter  , 2 => communications  , 3 => air_flight');
            $table->string('model_type');

            $table->string('student_signature');
            $table->string('teachers_signature');
            $table->string('signature_of_the_squadron_commander');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_information');
    }
};
