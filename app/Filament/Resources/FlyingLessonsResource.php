<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlyingLessonsResource\Pages;
use App\Filament\Resources\FlyingLessonsResource\RelationManagers;
use App\Models\FlyingLessons;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FlyingLessonsResource extends Resource
{
    protected static ?string $model = FlyingLessons::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'دروس الطيران';

    public static function getNavigationSort(): ?int
    {
        return 3;
    }



    public static function getPluralLabel(): ?string
    {
        return 'دروس الطيران';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('lesson_name')->label('اسم الدرس'),
                DatePicker::make('date')->label('التاريخ'),
                TextInput::make('teacher_name')->label('اسم المدرس'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('teacher_name')->label('اسم المدرس'),
                TextColumn::make('lesson_name')->label('اسم الدرس'),
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
            ->headerActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\Action::make('طباعه')
                    ->icon('heroicon-m-printer')
                    ->color('info')
                    ->action(function(){
                        return redirect()->route('filament.app.pages.flying-lessons-page');
                    }),
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
            'index' => Pages\ListFlyingLessons::route('/'),
            'create' => Pages\CreateFlyingLessons::route('/create'),
            'edit' => Pages\EditFlyingLessons::route('/{record}/edit'),
        ];
    }
}
