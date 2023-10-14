<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPaper extends Model
{
    use HasFactory;

    protected $table = 'student_papers';

    protected $fillable = [
        'rank', 'name', 'img', 'section_id', 'started_at', 'ended_at', 'aircraft_type', 'comments', 'teachers_name',  'from',   'to',   'teachers_comment'
    ];


    public function section()
    {
        return $this->belongsTo(Sections::class);
    }
}
