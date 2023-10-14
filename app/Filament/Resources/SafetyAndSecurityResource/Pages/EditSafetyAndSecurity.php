<?php

namespace App\Filament\Resources\SafetyAndSecurityResource\Pages;

use App\Filament\Resources\SafetyAndSecurityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSafetyAndSecurity extends EditRecord
{
    protected static string $resource = SafetyAndSecurityResource::class;

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
