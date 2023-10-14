<?php

namespace App\Filament\Resources\EstimatesResource\Pages;

use App\Filament\Resources\EstimatesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstimates extends EditRecord
{
    protected static string $resource = EstimatesResource::class;

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
