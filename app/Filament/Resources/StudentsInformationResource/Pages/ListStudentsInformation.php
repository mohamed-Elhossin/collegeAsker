<?php

namespace App\Filament\Resources\StudentsInformationResource\Pages;

use App\Filament\Resources\StudentsInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentsInformation extends ListRecords
{
    protected static string $resource = StudentsInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
