<?php

namespace App\Filament\Resources\StudentsInformationResource\Pages;

use App\Filament\Resources\StudentsInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;

class EditStudentsInformation extends EditRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = StudentsInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function getSteps(): array
    {
        return [

                Step::make('البيانات شخصية')
                    ->schema([
                        TextInput::make('name')->label('الاسم')->required(),
                        TextInput::make('military_number')->label('الرقم العسكري')->required(),
                        TextInput::make('batch')->label('الدفعة')->required(),
                        TextInput::make('medical_fitness')->label('اللياقة الطبية')->required(),
                        DatePicker::make('date_of_joining_the_college')->label('تاريخ الالتحاق بالكلية')->required(),
                        DatePicker::make('flight_start_date')->label('تاريخ بدء الطيران')->required(),
                        DatePicker::make('date_of_birth')->label('تاريخ الميلاد')->required()
                    ]),
                    Step::make('البيانات العائلية')
                    ->schema([
                        TextInput::make('Place_of_birth')->label('محل الميلاد')->required(),
                        TextInput::make('Governorate')->label('المحافظة')->required(),
                        TextInput::make('fathers_name')->label('اسم الاب او ولي الامر')->required(),
                        TextInput::make('fathers_job')->label('وظيفتة')->required(),
                        TextInput::make('mothers_name')->label('اسم الام')->required(),
                        TextInput::make('mothers_job')->label('وظيفتها')->required(),
                        TextInput::make('fathers_address')->label('عنوان الاب او ولي الامر')->required(),
                        TextInput::make('fathers_phone')->label('الهاتف')->required(),
                    ]),

                    Step::make('2 البيانات العائلية')
                    ->schema([
                        TextInput::make('name_of_the_closest_person')->label('اسم القرب الاقارب')->required(),
                        TextInput::make('the_closest_person_jop')->label('وظيفتة')->required(),
                        TextInput::make('the_closest_person_phone')->label('الهاتف')->required(),
                        TextInput::make('number_of_family_members')->label('عدد افراد الاسرة')->required(),
                        TextInput::make('number_of_brothers')->label('عدد الاخوة و الترتيب بينهم')->required(),
                        TextInput::make('males')->label('ذكور')->required(),
                        TextInput::make('females')->label('اناث')->required(),

                        MarkdownEditor::make('brothers_jop')->label('وظيفة الاشقاء')->required(),
                        Radio::make('parents_separated')
                        ->label('هل الوالدين منفصلين')
                        ->boolean()
                        ->inline()
                        ->required(),
                        TextInput::make('family_income_per_month')->label('دخل الاسرة الشهري')->required(),
                        TextInput::make('sources_of_income')->label('مصادر الدخل')->required(),
                    ]),


                    Step::make('البيانات الدراسية')
                    ->schema([
                        TextInput::make('latest_academic_qualification')->label('اخر مؤهل دراسي حاصل علية الطالب')->required(),
                        DatePicker::make('date_of_obtaining_the_latest_academic_qualifications')->label('تاريخ الحصول علي اخر مؤهل دراسي')->required(),
                        TextInput::make('section')->label('الشعبة')->required(),
                        TextInput::make('the_entity_from_which_he_obtained_a_qualification')->label('المدرسة او الجهة التي حصل منها علي الشهاددة')->required(),
                        TextInput::make('percentage_in_high_school')->label('النسبة المؤية في الثانوية العامة')->required(),

                        Radio::make('first_foreign_language')
                        ->label('اللغة الاجنبية الاولي')
                        ->options([
                            0 => 'الانجليزية',
                            1 => 'الفرنسية',
                        ])
                        ->inline()
                        ->required(),
                        TextInput::make('degree_he_earned')->label('الدرجة الحاصل عليها')->required(),
                        TextInput::make('the_number_of_years_of_schooling_in_high_school')->label('عدد سنوات الدراسة في الثانوية العامة')->required(),

                    ]),


                    Step::make('البيانات التكميلية')
                    ->schema([
                        MarkdownEditor::make('sports_tournaments')->label('البطولات الرياضية')->required(),
                        MarkdownEditor::make('hobbies')->label('الهوايات')->required(),

                        Radio::make('the_students_desire_to_fly')
                        ->label('رغبة الطالب في الطيران')
                        ->options([
                            0 => 'مقاتلات',
                            1 => 'هليكوبتر',
                            2 => 'مواصلات',
                            3 => 'جوي',
                        ])
                        ->inline()
                        ->required(),
                        TextInput::make('model_type')->label('نوع الطراز')->required(),
                        TextInput::make('student_signature')->label('توقيع الطالب')->required(),
                        TextInput::make('teachers_signature')->label('توقيع المدرس')->required(),
                        TextInput::make('signature_of_the_squadron_commander')->label('توقيع قائد السرب')->required(),


                    ]),

        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
