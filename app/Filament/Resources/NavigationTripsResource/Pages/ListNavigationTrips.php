<?php

namespace App\Filament\Resources\NavigationTripsResource\Pages;

use App\Filament\Resources\NavigationTripsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavigationTrips extends ListRecords
{
    protected static string $resource = NavigationTripsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
