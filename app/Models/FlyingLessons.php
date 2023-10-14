<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlyingLessons extends Model
{
    use HasFactory;

    protected $table = 'flying_lessons';

    protected $fillable = ['id' , 'lesson_name' , 'date' , 'teacher_name'];
}
