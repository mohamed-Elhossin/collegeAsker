<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AviationAccidentViolatios extends Model
{
    use HasFactory;

    protected $table = 'aviation_accident_violatios';

  

    protected $fillable = ['student_paper_id'
                        , 'section_id'
                        , 'aircraft_type'
                        , 'date'
                        , 'aircraft_number'
                        , 'flight_hours_before_the_violation'
                        , 'description_of_the_violation'
                        , 'penalty'
                    ];

    public function student(){
        return $this->belongsTo(StudentPaper::class , 'student_paper_id');
    }

    public function section(){
        return $this->belongsTo(Sections::class , 'section_id');
    }
}
