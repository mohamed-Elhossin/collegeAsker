<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalStudentTrips extends Model
{
    use HasFactory;

    protected $table = 'total_student_trips';

    protected $fillable = ['date' , 'teacher' , 'flying_lesson_id' , 'double' , 'double_total' , 'single' , 'single_total' , 'total_summation'];

    public function lesson(){
        return $this->belongsTo(FlyingLessons::class , 'flying_lesson_id');
    }
}

