<?php

namespace App\Filament\Pages;

use App\Models\TotalStudentTrips;
use Filament\Pages\Page;

class TotalStudentTripsPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.total-student-trips-page';

    protected static ?string $title = 'رحلات الطيران للطالب خلال الدورة';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = TotalStudentTrips::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
