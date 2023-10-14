<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralInformationResource\Pages;
use App\Filament\Resources\GeneralInformationResource\RelationManagers;
use App\Models\StudentPaper;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeneralInformationResource extends Resource
{
    protected static ?string $model = StudentPaper::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'بيانات عامة عن الطالب';

    public static function getNavigationSort(): ?int
    {
        return 1;
    }


    public static function getPluralLabel(): ?string
    {
        return 'بيانات عامة عن الطالب';
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
                TextColumn::make('rank')->label('الرتبة')->searchable(),
                TextColumn::make('name')->label('الاسم')->searchable(),
                ImageColumn::make('img')->label('الصورة')->circular()
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
                fn (Model $record): string => route('filament.app.pages.general-information-page', ['Student' => $record]),
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
            'index' => Pages\ListGeneralInformation::route('/'),
            'create' => Pages\CreateGeneralInformation::route('/create'),
            'edit' => Pages\EditGeneralInformation::route('/{record}/edit'),
        ];
    }
}
