<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HealthStatusResource\Pages;
use App\Filament\Resources\HealthStatusResource\RelationManagers;
use App\Models\HealthStatus;
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

class HealthStatusResource extends Resource
{
    protected static ?string $model = HealthStatus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'الحاله الصحيه للطالب';

    public static function getNavigationSort(): ?int
    {
        return 9;
    }


    public static function getPluralLabel(): ?string
    {
        return 'الحاله الصحيه للطالب';
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
                TextInput::make('teacher')->label('اسم المدرس')->required(),
                TextInput::make('flight_number')->label('رقم الطلعه')->numeric()->required(),
                TextInput::make('flight_type')->label('نوع الطلعه')->required(),
                TextInput::make('health_status')->label('الحاله الصحيه للطالب')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('student.name')->label('اسم الطالب'),
                TextColumn::make('date')->label('التاريخ'),
                TextColumn::make('teacher')->label('اسم المدرس'),
                TextColumn::make('flight_number')->label('رقم الطلعه'),
                TextColumn::make('flight_type')->label('نوع الطلعه'),
                TextColumn::make('health_status')->label('الحاله الصحيه'),
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
                fn (Model $record): string => route('filament.app.pages.health-status', ['Student' => $record]),
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
            'index' => Pages\ListHealthStatuses::route('/'),
            'create' => Pages\CreateHealthStatus::route('/create'),
            'edit' => Pages\EditHealthStatus::route('/{record}/edit'),
        ];
    }
}
