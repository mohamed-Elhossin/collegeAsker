<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummaryOfTheMonth extends Model
{
    use HasFactory;

    protected $table = 'summary_of_the_month';

    protected $fillable = ['id', 'student_paper_id' , 'name' , 'comment' , 'date'];
    
    public function student(){
        return $this->belongsTo(StudentPaper::class , 'student_paper_id');
    }
}
