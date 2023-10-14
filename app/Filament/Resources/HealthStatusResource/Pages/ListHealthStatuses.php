<?php

namespace App\Filament\Resources\HealthStatusResource\Pages;

use App\Filament\Resources\HealthStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHealthStatuses extends ListRecords
{
    protected static string $resource = HealthStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
