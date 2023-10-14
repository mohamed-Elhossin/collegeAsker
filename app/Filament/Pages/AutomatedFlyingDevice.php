<?php

namespace App\Filament\Pages;

use App\Models\AutomatedFlyingDevice as ModelsAutomatedFlyingDevice;
use Filament\Pages\Page;


class AutomatedFlyingDevice extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.automated-flying-device';

    protected static ?string $title = 'جهاز الطيران الالي';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = ModelsAutomatedFlyingDevice::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
