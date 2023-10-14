<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimates extends Model
{
    use HasFactory;

    protected $table = 'estimates';

    protected $fillable = ['id' , 'exam_id' , 'student_paper_id' , 'date' , 'degree' , 'final_degree'];

    public function exams(){
        return $this->belongsTo(Exams::class , 'exam_id');
    }

    public function student(){
        return $this->belongsTo(StudentPaper::class , 'student_paper_id');
    }
}
