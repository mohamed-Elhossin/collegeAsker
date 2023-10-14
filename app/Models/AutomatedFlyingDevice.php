<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomatedFlyingDevice extends Model
{
    use HasFactory;

    protected $table = 'automated_flying_device';

    protected $fillable = ['student_paper_id' , 'date' , 'hours' , 'min' , 'teacher'];

    public function student(){
        return $this->belongsTo(StudentPaper::class , 'student_paper_id');
    }
}
