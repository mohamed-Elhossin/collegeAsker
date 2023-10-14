<?php

namespace App\Filament\Pages;

use App\Models\SafetyAndSecurity;
use Filament\Pages\Page;

class SecurityAndSafetyProcedures extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.security-and-safety-procedures';

    protected static ?string $title = 'متابعه اجراءات الامن و السلامه';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = SafetyAndSecurity::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
