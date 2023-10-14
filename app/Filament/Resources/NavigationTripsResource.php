<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NavigationTripsResource\Pages;
use App\Filament\Resources\NavigationTripsResource\RelationManagers;
use App\Models\NavigationTrips;
use App\Models\StudentPaper;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NavigationTripsResource extends Resource
{
    protected static ?string $model = NavigationTrips::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'رحلات الملاحه';

    public static function getNavigationSort(): ?int
    {
        return 12;
    }


    public static function getPluralLabel(): ?string
    {
        return 'رحلات الملاحه';
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

                TextInput::make('flight_number')->label('رقم الطلعه')->numeric()->required(),
                DatePicker::make('date')->label('التاريخ')->required(),
                TextInput::make('itinerary')->label('خط السير')->required(),
                TextInput::make('height')->label('الارتفاع')->numeric()->required(),
                TextInput::make('distance')->label('المسافه')->numeric()->required(),
                TextInput::make('time')->label('الزمن')->numeric()->required(),
                TextInput::make('double')->label('مزدوج')->numeric()->required(),
                TextInput::make('single')->label('منفرد')->numeric()->required(),
                Radio::make('morning_or_night')
                ->label('نهاري او ليلي؟')
                ->options([
                    '0' => 'نهاري',
                    '1' => 'ليلي',
                ])
                ->inline()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('student.name')->label('اسم الطالب'),
                TextColumn::make('flight_number')->label('رقم الطلعه'),
                TextColumn::make('date')->label('التاريخ'),
                TextColumn::make('itinerary')->label('خط السير'),
                TextColumn::make('height')->label('الارتفاع'),
                TextColumn::make('distance')->label('المسافه'),
                TextColumn::make('time')->label('الزمن'),
                TextColumn::make('morning_or_night')->label('ليلي او نهاري')
                ->formatStateUsing(fn (string $state): string => $state == 0 ? 'نهاري' : 'ليلي'),
                TextColumn::make('double')->label('مزدوج'),
                TextColumn::make('single')->label('منفرد'),

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
                fn (Model $record): string => route('filament.app.pages.navigation-trips-page', ['Student' => $record]),
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
            'index' => Pages\ListNavigationTrips::route('/'),
            'create' => Pages\CreateNavigationTrips::route('/create'),
            'edit' => Pages\EditNavigationTrips::route('/{record}/edit'),
        ];
    }
}
