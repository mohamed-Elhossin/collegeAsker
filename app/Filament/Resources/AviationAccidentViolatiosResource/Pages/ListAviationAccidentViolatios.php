<?php

namespace App\Filament\Resources\AviationAccidentViolatiosResource\Pages;

use App\Filament\Resources\AviationAccidentViolatiosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAviationAccidentViolatios extends ListRecords
{
    protected static string $resource = AviationAccidentViolatiosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
