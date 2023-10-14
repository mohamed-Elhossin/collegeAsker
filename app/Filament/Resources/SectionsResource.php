<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionsResource\Pages;
use App\Filament\Resources\SectionsResource\RelationManagers;
use App\Models\Sections;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionsResource extends Resource
{
    protected static ?string $model = Sections::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'الاقسام';

    public static function getNavigationSort(): ?int
    {
        return 14;
    }


    public static function getPluralLabel(): ?string
    {
        return 'الاقسام';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('section_name')->label('اسم القسم')->required(),
                MarkdownEditor::make('section_informations')->label('معلومات عن القسم')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section_name')->label('اسم القسم')->searchable(),
                TextColumn::make('section_informations')->label('معلومات عن القسم')->searchable(),
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
            ]);
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSections::route('/create'),
            'edit' => Pages\EditSections::route('/{record}/edit'),
        ];
    }
}
