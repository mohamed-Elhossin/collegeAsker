<?php

namespace App\Filament\Resources\ExamsResource\Pages;

use App\Filament\Resources\ExamsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExams extends EditRecord
{
    protected static string $resource = ExamsResource::class;

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
