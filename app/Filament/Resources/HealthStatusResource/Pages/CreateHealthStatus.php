<?php

namespace App\Filament\Resources\HealthStatusResource\Pages;

use App\Filament\Resources\HealthStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHealthStatus extends CreateRecord
{
    protected static string $resource = HealthStatusResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
