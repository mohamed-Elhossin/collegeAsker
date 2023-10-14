<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyAndSecurity extends Model
{
    use HasFactory;

    protected $table = 'safety_and_security';

    protected $fillable = ['id' , 'flying_lesson_id' , 'flight_number' , 'date' , 'degree'];

    public function lesson(){
        return $this->belongsTo(FlyingLessons::class , 'flying_lesson_id');
    }
}
