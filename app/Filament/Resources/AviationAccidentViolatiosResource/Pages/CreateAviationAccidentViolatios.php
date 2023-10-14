<?php

namespace App\Filament\Resources\AviationAccidentViolatiosResource\Pages;

use App\Filament\Resources\AviationAccidentViolatiosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAviationAccidentViolatios extends CreateRecord
{
    protected static string $resource = AviationAccidentViolatiosResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
