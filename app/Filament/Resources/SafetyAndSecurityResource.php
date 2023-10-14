<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SafetyAndSecurityResource\Pages;
use App\Filament\Resources\SafetyAndSecurityResource\RelationManagers;
use App\Models\FlyingLessons;
use App\Models\SafetyAndSecurity;
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

class SafetyAndSecurityResource extends Resource
{
    protected static ?string $model = SafetyAndSecurity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'متابعه اجراءات الامن و السلامه';

    public static function getNavigationSort(): ?int
    {
        return 7;
    }



    public static function getPluralLabel(): ?string
    {
        return 'متابعه اجراءات الامن و السلامه';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('flying_lesson_id')
                ->label('اسم الدرس')
                ->options(FlyingLessons::all()->pluck('lesson_name', 'id'))
                ->searchable()
                ->required(),
                TextInput::make('flight_number')->label('رقم الرحله')->numeric()->required(),
                DatePicker::make('date')->label('التاريخ')->required(),
                TextInput::make('degree')->label('الدرجه')->numeric()->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('lesson.lesson_name')->label('اسم الدرس'),
                TextColumn::make('flight_number')->label('رقم الرحله'),
                TextColumn::make('degree')->label('الدرجه'),
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
                fn (Model $record): string => route('filament.app.pages.security-and-safety-procedures', ['Student' => $record]),
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
            'index' => Pages\ListSafetyAndSecurities::route('/'),
            'create' => Pages\CreateSafetyAndSecurity::route('/create'),
            'edit' => Pages\EditSafetyAndSecurity::route('/{record}/edit'),
        ];
    }
}
