<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplinaryPenalties extends Model
{
    use HasFactory;

    protected $table = 'disciplinary_penalties';

    protected $fillable = ['student_paper_id','Date_of_violation' , 'The_nature_of_the_violation' , 'penalty' , 'comment'];

    public function student(){
        return $this->belongsTo(StudentPaper::class , 'student_paper_id');
    }

}
