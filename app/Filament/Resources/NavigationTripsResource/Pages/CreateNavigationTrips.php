<?php

namespace App\Filament\Resources\NavigationTripsResource\Pages;

use App\Filament\Resources\NavigationTripsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNavigationTrips extends CreateRecord
{
    protected static string $resource = NavigationTripsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
