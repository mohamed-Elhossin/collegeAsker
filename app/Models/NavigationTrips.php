<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavigationTrips extends Model
{
    use HasFactory;

    protected $table = 'navigation_trips';

    protected $fillable = ['student_paper_id','flight_number' ,'date' , 'itinerary' , 'height' , 'distance' , 'time' , 'morning_or_night' , 'double' , 'single'];

    public function student(){
        return $this->belongsTo(StudentPaper::class , 'student_paper_id');
    }
}
