<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsInformation extends Model
{
    use HasFactory;

    protected $table = 'students_information';

    protected $fillable = [
        'name',
        'military_number',
        'batch',
        'medical_fitness',
        'date_of_joining_the_college',
        'flight_start_date',

        'date_of_birth',
        'Place_of_birth',
        'Governorate',
        'fathers_name',
        'fathers_job',
        'mothers_name',
        'mothers_job',
        'fathers_address',
        'fathers_phone',


        'name_of_the_closest_person',
        'the_closest_person_jop',
        'the_closest_person_phone',
        'number_of_family_members',
        'number_of_brothers',
        'males',
        'females',


        'brothers_jop',
        'parents_separated',
        'date_of_separation',

        'family_income_per_month',
        'sources_of_income',
        'latest_academic_qualification',
        'section',
        'the_entity_from_which_he_obtained_a_qualification',
        'percentage_in_high_school',
        'date_of_obtaining_the_latest_academic_qualifications',



        'first_foreign_language',
        'degree_he_earned',
        'the_number_of_years_of_schooling_in_high_school',
        'sports_tournaments',
        'hobbies',
        'the_students_desire_to_fly',
        'model_type',
        'student_signature',
        'teachers_signature',
        'signature_of_the_squadron_commander',

    ];
}
