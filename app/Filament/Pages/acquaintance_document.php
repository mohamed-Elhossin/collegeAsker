<?php

namespace App\Filament\Pages;

use App\Models\StudentsInformation;
use Filament\Pages\Page;

class acquaintance_document extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.acquaintance_document';

    protected static ?string $title = 'وثيقة التعارف';


    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = StudentsInformation::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
