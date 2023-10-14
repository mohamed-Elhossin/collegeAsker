<?php

namespace App\Filament\Resources\SafetyAndSecurityResource\Pages;

use App\Filament\Resources\SafetyAndSecurityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSafetyAndSecurity extends CreateRecord
{
    protected static string $resource = SafetyAndSecurityResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
