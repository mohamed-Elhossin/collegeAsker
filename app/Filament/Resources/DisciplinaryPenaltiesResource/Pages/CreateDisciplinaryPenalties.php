<?php

namespace App\Filament\Resources\DisciplinaryPenaltiesResource\Pages;

use App\Filament\Resources\DisciplinaryPenaltiesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDisciplinaryPenalties extends CreateRecord
{
    protected static string $resource = DisciplinaryPenaltiesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
