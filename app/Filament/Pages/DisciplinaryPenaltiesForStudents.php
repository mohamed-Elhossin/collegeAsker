<?php

namespace App\Filament\Pages;

use App\Models\DisciplinaryPenalties;
use Filament\Pages\Page;

class DisciplinaryPenaltiesForStudents extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.disciplinary-penalties-for-students';

    protected static ?string $title = 'العقوبات التأديبية للطلاب';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = DisciplinaryPenalties::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
