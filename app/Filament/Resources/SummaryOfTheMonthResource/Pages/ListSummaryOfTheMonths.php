<?php

namespace App\Filament\Resources\SummaryOfTheMonthResource\Pages;

use App\Filament\Resources\SummaryOfTheMonthResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSummaryOfTheMonths extends ListRecords
{
    protected static string $resource = SummaryOfTheMonthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
