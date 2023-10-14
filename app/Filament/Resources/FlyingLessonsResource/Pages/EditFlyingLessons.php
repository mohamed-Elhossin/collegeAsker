<?php

namespace App\Filament\Resources\FlyingLessonsResource\Pages;

use App\Filament\Resources\FlyingLessonsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFlyingLessons extends EditRecord
{
    protected static string $resource = FlyingLessonsResource::class;

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
