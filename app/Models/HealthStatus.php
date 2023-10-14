<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthStatus extends Model
{
    use HasFactory;

    protected $table = 'health_status';

    protected $fillable = ['student_paper_id' , 'date' , 'teacher' , 'flight_number' , 'flight_type' , 'health_status'];

    public function student(){
        return $this->belongsTo(StudentPaper::class , 'student_paper_id');
    }
}
