<?php

namespace App\Filament\Resources\TotalStudentTripsResource\Pages;

use App\Filament\Resources\TotalStudentTripsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTotalStudentTrips extends EditRecord
{
    protected static string $resource = TotalStudentTripsResource::class;

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
