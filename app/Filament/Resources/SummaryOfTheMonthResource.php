<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SummaryOfTheMonthResource\Pages;
use App\Filament\Resources\SummaryOfTheMonthResource\RelationManagers;
use App\Models\StudentPaper;
use App\Models\SummaryOfTheMonth;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;

class SummaryOfTheMonthResource extends Resource
{
    protected static ?string $model = SummaryOfTheMonth::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'ملخص تمام الشهر';

    public static function getNavigationSort(): ?int
    {
        return 4;
    }



    public static function getPluralLabel(): ?string
    {
        return 'ملخص تمام الشهر';
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

                TextInput::make('name')->label('التخلف')->required(),
                TextInput::make('comment')->label('الملاحظه')->required(),
                DatePicker::make('date')->label('التاريخ')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('اسم الطالب'),
                TextColumn::make('name')->label('التخلف'),
                TextColumn::make('comment')->label('الملاحظه'),
                TextColumn::make('date')->label('التاريخ'),
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
                fn (Model $record): string => route('filament.app.pages.summary-of-the-month', ['Student' => $record]),
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
            'index' => Pages\ListSummaryOfTheMonths::route('/'),
            'create' => Pages\CreateSummaryOfTheMonth::route('/create'),
            'edit' => Pages\EditSummaryOfTheMonth::route('/{record}/edit'),
        ];
    }
}
