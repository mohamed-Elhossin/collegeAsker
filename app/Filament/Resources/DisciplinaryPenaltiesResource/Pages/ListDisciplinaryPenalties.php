<?php

namespace App\Filament\Resources\DisciplinaryPenaltiesResource\Pages;

use App\Filament\Resources\DisciplinaryPenaltiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisciplinaryPenalties extends ListRecords
{
    protected static string $resource = DisciplinaryPenaltiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
