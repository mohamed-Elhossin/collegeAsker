<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TotalStudentTripsResource\Pages;
use App\Filament\Resources\TotalStudentTripsResource\RelationManagers;
use App\Models\FlyingLessons;
use App\Models\StudentPaper;
use App\Models\TotalStudentTrips;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
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

class TotalStudentTripsResource extends Resource
{
    protected static ?string $model = TotalStudentTrips::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'مجمل رحلات الطيران للطالب خلال الدوره';

    public static function getNavigationSort(): ?int
    {
        return 13;
    }



    public static function getPluralLabel(): ?string
    {
        return 'مجمل رحلات الطيران للطالب خلال الدوره';
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
                DatePicker::make('date')->label('التاريخ')->required(),
                TextInput::make('teacher')->label('المدرس')->required(),
                Select::make('flying_lesson_id')
                ->label('اسم الدرس')
                ->options(FlyingLessons::all()->pluck('lesson_name', 'id'))
                ->searchable()
                ->required(),
                // TextInput::make('lesson')->label('الدرس')->required(),
                TextInput::make('double')->label('مزدوج')->numeric()->required(),
                TextInput::make('double_total')->label('مجموع المزدوج')->numeric()->required(),
                TextInput::make('single')->label('منفرد')->numeric()->required(),
                TextInput::make('single_total')->label('مجموع المنفرد')->numeric()->required(),
                TextInput::make('total_summation')->label('المجموع الكلي')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')->label('التاريخ'),
                TextColumn::make('teacher')->label('المدرس'),
                TextColumn::make('lesson.lesson_name')->label('الدرس'),
                TextColumn::make('double')->label('مزدوج'),
                TextColumn::make('double_total')->label('مجموع المزدوج'),
                TextColumn::make('single')->label('منفرد'),
                TextColumn::make('single_total')->label('مجموع المنفرد'),
                TextColumn::make('total_summation')->label('المجموع الكلي'),
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
                fn (Model $record): string => route('filament.app.pages.total-student-trips-page', ['Student' => $record]),
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
            'index' => Pages\ListTotalStudentTrips::route('/'),
            'create' => Pages\CreateTotalStudentTrips::route('/create'),
            'edit' => Pages\EditTotalStudentTrips::route('/{record}/edit'),
        ];
    }
}
