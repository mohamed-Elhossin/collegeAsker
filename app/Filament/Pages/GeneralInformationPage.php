<?php

namespace App\Filament\Pages;

use App\Models\StudentPaper;
use Filament\Pages\Page;

class GeneralInformationPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.general-information-page';

    protected static ?string $title = 'بيانات عامة عن الطالب';

    // protected static ?string $slug = 'settings';
    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = StudentPaper::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
