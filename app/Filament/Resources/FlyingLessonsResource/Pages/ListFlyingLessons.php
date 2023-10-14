<?php

namespace App\Filament\Resources\FlyingLessonsResource\Pages;

use App\Filament\Resources\FlyingLessonsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFlyingLessons extends ListRecords
{
    protected static string $resource = FlyingLessonsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
