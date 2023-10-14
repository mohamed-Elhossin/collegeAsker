<?php

namespace App\Filament\Resources\SafetyAndSecurityResource\Pages;

use App\Filament\Resources\SafetyAndSecurityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSafetyAndSecurities extends ListRecords
{
    protected static string $resource = SafetyAndSecurityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
