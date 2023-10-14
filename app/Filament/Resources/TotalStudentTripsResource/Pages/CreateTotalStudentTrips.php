<?php

namespace App\Filament\Resources\TotalStudentTripsResource\Pages;

use App\Filament\Resources\TotalStudentTripsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTotalStudentTrips extends CreateRecord
{
    protected static string $resource = TotalStudentTripsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
