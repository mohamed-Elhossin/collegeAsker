<?php

namespace App\Filament\Resources\AviationAccidentViolatiosResource\Pages;

use App\Filament\Resources\AviationAccidentViolatiosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAviationAccidentViolatios extends EditRecord
{
    protected static string $resource = AviationAccidentViolatiosResource::class;

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
