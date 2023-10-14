<?php

namespace App\Filament\Resources\FlyingLessonsResource\Pages;

use App\Filament\Resources\FlyingLessonsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFlyingLessons extends CreateRecord
{
    protected static string $resource = FlyingLessonsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
