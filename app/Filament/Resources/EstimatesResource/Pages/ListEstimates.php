<?php

namespace App\Filament\Resources\EstimatesResource\Pages;

use App\Filament\Resources\EstimatesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstimates extends ListRecords
{
    protected static string $resource = EstimatesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
