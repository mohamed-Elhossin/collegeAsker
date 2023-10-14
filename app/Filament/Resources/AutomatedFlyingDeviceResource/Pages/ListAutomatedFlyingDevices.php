<?php

namespace App\Filament\Resources\AutomatedFlyingDeviceResource\Pages;

use App\Filament\Resources\AutomatedFlyingDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAutomatedFlyingDevices extends ListRecords
{
    protected static string $resource = AutomatedFlyingDeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
