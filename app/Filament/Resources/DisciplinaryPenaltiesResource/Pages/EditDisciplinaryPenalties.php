<?php

namespace App\Filament\Resources\DisciplinaryPenaltiesResource\Pages;

use App\Filament\Resources\DisciplinaryPenaltiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisciplinaryPenalties extends EditRecord
{
    protected static string $resource = DisciplinaryPenaltiesResource::class;

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
