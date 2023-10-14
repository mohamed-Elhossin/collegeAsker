<?php

namespace App\Filament\Pages;

use App\Models\SummaryOfTheMonth as ModelsSummaryOfTheMonth;
use Filament\Pages\Page;

class SummaryOfTheMonth extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.summary-of-the-month';

    protected static ?string $title = 'ملخص تمام الشهر';


    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = ModelsSummaryOfTheMonth::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

}
