<?php

namespace App\Filament\Resources\GeneralInformationResource\Pages;

use App\Filament\Resources\GeneralInformationResource;
use App\Models\Sections;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\Wizard\Step;

class CreateGeneralInformation extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = GeneralInformationResource::class;

    protected function getSteps(): array
    {
        return [

                Step::make('البيانات العامة')
                    ->schema([
                        TextInput::make('rank')->label('الرتبة')->required(),
                        TextInput::make('name')->label('الاسم')->required(),
                        Select::make('section_id')
                        ->label('القسم')
                        ->relationship(name: 'section', titleAttribute: 'section_name')
                        ->createOptionForm([
                            TextInput::make('section_name')->label('اسم القسم')->required(),
                            MarkdownEditor::make('section_informations')->label('معلومات عن القسم')->required(),
                        ])
                        ->options(Sections::all()->pluck('section_name', 'id'))
                        ->searchable()
                        ->required(),
                        FileUpload::make('img')->label('الصورة')->required(),
                        DatePicker::make('started_at')->label('تاريخ بدء المرحلة الدراسية')->required(),
                        DatePicker::make('ended_at')->label('تاريخ انتهاء المرحلة الدراسية')->required(),
                    ]),
                    Step::make('بيانات')
                    ->schema([
                        TextInput::make('aircraft_type')->label('نوع الطائرة')->required(),
                        MarkdownEditor::make('comments')->label('ملاحظات')->required(),
                    ]),
                    Step::make('بيانات المعلمين')
                    ->schema([
                        TextInput::make('teachers_name')->label('اسم المدرس')->required(),
                        DatePicker::make('from')->label('من')->required(),
                        DatePicker::make('to')->label('الي')->required(),
                        MarkdownEditor::make('teachers_comment')->label('ملاحظات المدرس')->required(),
                    ]),

        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
