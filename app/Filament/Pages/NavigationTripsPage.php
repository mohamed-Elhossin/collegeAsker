<?php

namespace App\Filament\Pages;

use App\Models\NavigationTrips;
use Filament\Pages\Page;

class NavigationTripsPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.navigation-trips-page';

    protected static ?string $title = 'رحلات الملاحه';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = NavigationTrips::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
