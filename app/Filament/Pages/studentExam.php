<?php

namespace App\Filament\Pages;

use App\Models\Estimates;
use Filament\Pages\Page;

class studentExam extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.student-exam';

    protected static ?string $title = 'اختبارات الطالب';

    public $data;

    public function mount(){
        if(request()->query('Student') != null){
            $this->data = Estimates::find(request()->query('Student'));
        }
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
