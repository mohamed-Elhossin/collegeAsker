<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EstimatesResource\Pages;
use App\Filament\Resources\EstimatesResource\RelationManagers;
use App\Models\Estimates;
use App\Models\Exams;
use App\Models\StudentPaper;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;

class EstimatesResource extends Resource
{
    protected static ?string $model = Estimates::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'التقديرات';

    public static function getNavigationSort(): ?int
    {
        return 6;
    }



    public static function getPluralLabel(): ?string
    {
        return 'التقديرات';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Select::make('exam_id')
                ->label('اسم الاختبار')
                ->options(Exams::all()->pluck('name', 'id'))
                ->searchable()
                ->required(),

                Select::make('student_paper_id')
                ->label('اسم الطالب')
                ->options(StudentPaper::all()->pluck('name', 'id'))
                ->searchable()
                ->required(),

                DatePicker::make('date')->label('التاريخ'),

                TextInput::make('degree')->label('الدرجه')->numeric()->required(),

                TextInput::make('final_degree')->label('الدرجه النهائيه')->numeric()->required(),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('اسم الطالب')->searchable(),
                TextColumn::make('exams.name')->label('اسم الاختبار')->searchable(),
                TextColumn::make('date')->label('التاريخ'),
                TextColumn::make('degree')->label('الدرجه'),
                TextColumn::make('final_degree')->label('الدرجه النهائيه'),
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
                fn (Model $record): string => route('filament.app.pages.student-exam', ['Student' => $record]),
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
            'index' => Pages\ListEstimates::route('/'),
            'create' => Pages\CreateEstimates::route('/create'),
            'edit' => Pages\EditEstimates::route('/{record}/edit'),
        ];
    }
}
