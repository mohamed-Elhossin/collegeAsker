<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AviationAccidentViolatiosResource\Pages;
use App\Filament\Resources\AviationAccidentViolatiosResource\RelationManagers;
use App\Models\AviationAccidentViolatios;
use App\Models\Sections;
use App\Models\StudentPaper;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AviationAccidentViolatiosResource extends Resource
{
    protected static ?string $model = AviationAccidentViolatios::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'حوادث الطيران';

    public static function getNavigationSort(): ?int
    {
        return 10;
    }


    public static function getPluralLabel(): ?string
    {
        return 'حوادث الطيران';
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Select::make('student_paper_id')
                ->label('اسم الطالب')
                ->options(StudentPaper::all()->pluck('name', 'id'))
                ->searchable()
                ->required(),

                Select::make('section_id')
                ->label('القسم الدراسي')
                ->options(Sections::all()->pluck('section_name', 'id'))
                ->searchable()
                ->required(),

                DatePicker::make('date')->label('تاريخ الحادث')->required(),

                TextInput::make('aircraft_type')->label('نوع الطائرة')->required(),

                TextInput::make('aircraft_number')->label('رقم الطائرة')->required()->numeric(),

                TextInput::make('flight_hours_before_the_violation')
                ->label('عدد ساعات الطيران قبل المخالفه')
                ->numeric()
                ->required(),

                MarkdownEditor::make('description_of_the_violation')->label('وصف المخالفه')->required(),

                MarkdownEditor::make('penalty')->label('الجزاء')->required(),





            ]);
    }

    public static function table(Table $table): Table
    {
        ['student_paper_id' , 'section_id' , 'aircraft_type' , 'date' , 'aircraft_number'];
        return $table
            ->columns([
                TextColumn::make('student.name')->label('اسم الطالب')->searchable(),
                TextColumn::make('section.section_name')->label('القسم الدراسي')->searchable(),
                TextColumn::make('date')->label('تاريخ الحادث'),
                TextColumn::make('aircraft_type')->label('نوع الطائرة')->searchable(),
                TextColumn::make('aircraft_number')->label('رقم الطائرة')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->recordUrl(
                fn (Model $record): string => route('filament.app.pages.aviation-accidents', ['Student' => $record]),
            );
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAviationAccidentViolatios::route('/'),
            'create' => Pages\CreateAviationAccidentViolatios::route('/create'),
            'edit' => Pages\EditAviationAccidentViolatios::route('/{record}/edit'),
        ];
    }
}
