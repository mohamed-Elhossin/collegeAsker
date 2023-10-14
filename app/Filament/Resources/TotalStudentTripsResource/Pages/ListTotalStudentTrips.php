<?php

namespace App\Filament\Resources\TotalStudentTripsResource\Pages;

use App\Filament\Resources\TotalStudentTripsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTotalStudentTrips extends ListRecords
{
    protected static string $resource = TotalStudentTripsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
