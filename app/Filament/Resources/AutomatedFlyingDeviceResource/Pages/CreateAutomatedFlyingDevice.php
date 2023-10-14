<?php

namespace App\Filament\Resources\AutomatedFlyingDeviceResource\Pages;

use App\Filament\Resources\AutomatedFlyingDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAutomatedFlyingDevice extends CreateRecord
{
    protected static string $resource = AutomatedFlyingDeviceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
