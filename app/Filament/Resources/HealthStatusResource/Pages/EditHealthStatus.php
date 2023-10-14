<?php

namespace App\Filament\Resources\HealthStatusResource\Pages;

use App\Filament\Resources\HealthStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHealthStatus extends EditRecord
{
    protected static string $resource = HealthStatusResource::class;

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
