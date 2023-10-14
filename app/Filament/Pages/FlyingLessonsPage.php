<?php

namespace App\Filament\Pages;

use App\Models\FlyingLessons;
use Filament\Pages\Page;

class FlyingLessonsPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.flying-lessons-page';

    protected static ?string $title = 'دروس الطيران حسب البرنامج العلمي';

    public $data;

    public function mount(){
        $this->data = FlyingLessons::all();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
