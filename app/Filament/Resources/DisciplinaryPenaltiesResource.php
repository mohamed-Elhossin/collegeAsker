<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisciplinaryPenaltiesResource\Pages;
use App\Filament\Resources\DisciplinaryPenaltiesResource\RelationManagers;
use App\Models\DisciplinaryPenalties;
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

class DisciplinaryPenaltiesResource extends Resource
{
    protected static ?string $model = DisciplinaryPenalties::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'العقوبات التاديبيه';

    public static function getNavigationSort(): ?int
    {
        return 8;
    }


    public static function getPluralLabel(): ?string
    {
        return 'العقوبات التاديبيه';
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
                DatePicker::make('Date_of_violation')->label('تاريخ المخالفه'),

                MarkdownEditor::make('penalty')->label('الجزاء')->required(),
                MarkdownEditor::make('comment')->label('ملاحظه')->required(),

                TextInput::make('The_nature_of_the_violation')->label('طبيعه المخالفه')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('اسم الطالب'),
                TextColumn::make('Date_of_violation')->label('تاريخ المخالفه'),
                TextColumn::make('The_nature_of_the_violation')->label('طبيعه المخالفه'),
                // TextColumn::make('penalty')->label('الجزاء'),
                // TextColumn::make('comment')->label('ملاحظه'),
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
                fn (Model $record): string => route('filament.app.pages.disciplinary-penalties-for-students', ['Student' => $record]),
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
            'index' => Pages\ListDisciplinaryPenalties::route('/'),
            'create' => Pages\CreateDisciplinaryPenalties::route('/create'),
            'edit' => Pages\EditDisciplinaryPenalties::route('/{record}/edit'),
        ];
    }
}
