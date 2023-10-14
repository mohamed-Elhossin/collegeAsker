<?php

namespace App\Filament\Resources\GeneralInformationResource\Pages;

use App\Filament\Resources\GeneralInformationResource;
use App\Models\Sections;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\Wizard\Step;

class EditGeneralInformation extends EditRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = GeneralInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSteps(): array
    {
        return [

                Step::make('البيانات العامة')
                    ->schema([
                        TextInput::make('rank')->required(),
                        TextInput::make('name')->required(),
                        Select::make('section_id')
                        ->label('section')
                        ->options(Sections::all()->pluck('section_name', 'id'))
                        ->searchable(),
                        FileUpload::make('img')->required(),
                        DatePicker::make('started_at')->required(),
                        DatePicker::make('ended_at')->required(),
                    ]),
                    Step::make('بيانات')
                    ->schema([
                        TextInput::make('aircraft_type')->required(),
                        MarkdownEditor::make('comments')->required(),
                    ]),
                    Step::make('بيانات المعلمين')
                    ->schema([
                        TextInput::make('teachers_name')->required(),
                        DatePicker::make('from')->required(),
                        DatePicker::make('to')->required(),
                        MarkdownEditor::make('teachers_comment')->required(),
                    ]),

        ];
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
