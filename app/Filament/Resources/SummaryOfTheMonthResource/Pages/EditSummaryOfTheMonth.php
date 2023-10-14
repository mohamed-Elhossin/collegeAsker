<?php

namespace App\Filament\Resources\SummaryOfTheMonthResource\Pages;

use App\Filament\Resources\SummaryOfTheMonthResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSummaryOfTheMonth extends EditRecord
{
    protected static string $resource = SummaryOfTheMonthResource::class;

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
