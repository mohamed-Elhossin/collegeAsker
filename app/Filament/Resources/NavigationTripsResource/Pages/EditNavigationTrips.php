<?php

namespace App\Filament\Resources\NavigationTripsResource\Pages;

use App\Filament\Resources\NavigationTripsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNavigationTrips extends EditRecord
{
    protected static string $resource = NavigationTripsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
