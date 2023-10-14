<?php

namespace App\Filament\Resources\SummaryOfTheMonthResource\Pages;

use App\Filament\Resources\SummaryOfTheMonthResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSummaryOfTheMonth extends CreateRecord
{
    protected static string $resource = SummaryOfTheMonthResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
