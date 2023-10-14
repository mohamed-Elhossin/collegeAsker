<?php

namespace App\Filament\Pages;

use App\Models\AviationAccidentViolatios;
use Filament\Pages\Page;

class AviationAccidents extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.aviation-accidents';

    protected static ?string $title = 'حوادث الطيران';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = AviationAccidentViolatios::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
