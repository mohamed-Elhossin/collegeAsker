<?php

namespace App\Filament\Resources\AutomatedFlyingDeviceResource\Pages;

use App\Filament\Resources\AutomatedFlyingDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAutomatedFlyingDevice extends EditRecord
{
    protected static string $resource = AutomatedFlyingDeviceResource::class;

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
