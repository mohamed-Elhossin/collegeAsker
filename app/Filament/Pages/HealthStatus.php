<?php

namespace App\Filament\Pages;

use App\Models\HealthStatus as ModelsHealthStatus;
use Filament\Pages\Page;

class HealthStatus extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.health-status';

    protected static ?string $title = 'الحاله الصحيه للطالب';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = ModelsHealthStatus::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
