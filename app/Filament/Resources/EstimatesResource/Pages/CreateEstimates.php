<?php

namespace App\Filament\Resources\EstimatesResource\Pages;

use App\Filament\Resources\EstimatesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEstimates extends CreateRecord
{
    protected static string $resource = EstimatesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
