<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentsInformationResource\Pages;
use App\Filament\Resources\StudentsInformationResource\RelationManagers;
use App\Models\StudentsInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentsInformationResource extends Resource
{
    protected static ?string $model = StudentsInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'وثيقة التعارف';

    public static function getNavigationSort(): ?int
    {
        return 2;
    }



    public static function getPluralLabel(): ?string
    {
        return 'وثيقة التعارف';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('name')->label('الاسم')->searchable(),
                TextColumn::make('military_number')->label('الرقم العسكري')->searchable(),
                TextColumn::make('batch')->label('الدفعة')->searchable(),
                TextColumn::make('medical_fitness')->label('اللياقة الطبية'),
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
                fn (Model $record): string => route('filament.app.pages.acquaintance-document', ['Student' => $record]),
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
            'index' => Pages\ListStudentsInformation::route('/'),
            'create' => Pages\CreateStudentsInformation::route('/create'),
            'edit' => Pages\EditStudentsInformation::route('/{record}/edit'),
        ];
    }
}
