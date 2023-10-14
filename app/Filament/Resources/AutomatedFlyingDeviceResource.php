<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AutomatedFlyingDeviceResource\Pages;
use App\Filament\Resources\AutomatedFlyingDeviceResource\RelationManagers;
use App\Models\AutomatedFlyingDevice;
use App\Models\StudentPaper;
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

class AutomatedFlyingDeviceResource extends Resource
{
    protected static ?string $model = AutomatedFlyingDevice::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'جهاز الطيران الالي';

    public static function getNavigationSort(): ?int
    {
        return 11;
    }


    public static function getPluralLabel(): ?string
    {
        return 'جهاز الطيران الالي';
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

                TextInput::make('hours')->label('عدد الساعات')->numeric()->required(),

                TextInput::make('min')->label('عدد الدقائق')->numeric()->required(),

                TextInput::make('teacher')->label('المدرس')->required(),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('اسم الطالب'),
                TextColumn::make('date')->label('التاريخ'),
                TextColumn::make('hours')->label('الساعات'),
                TextColumn::make('min')->label('الدقائق'),
                TextColumn::make('teacher')->label('المدرس'),
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
                fn (Model $record): string => route('filament.app.pages.automated-flying-device', ['Student' => $record]),
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
            'index' => Pages\ListAutomatedFlyingDevices::route('/'),
            'create' => Pages\CreateAutomatedFlyingDevice::route('/create'),
            'edit' => Pages\EditAutomatedFlyingDevice::route('/{record}/edit'),
        ];
    }
}
