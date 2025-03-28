<?php

namespace App\Filament\Resources\SickHistoryResource\RelationManagers;

use App\Filament\Resources\MedicalHistoryResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class MedicalHistoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'medicalHistories';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('hospital_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('check_date')
                            ->required(),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('hospital_name')
            ->columns([
                Tables\Columns\TextColumn::make('hospital_name'),
                Tables\Columns\TextColumn::make('check_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('medicines_count')
                    ->counts('medicines')
                    ->label(__('Medicines')),
            ])
            ->headerActions([

                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->url(fn ($record) => MedicalHistoryResource::getUrl().'/'.$record->getKey()),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->paginated(false)
            ->deferLoading()
            ->defaultSort('check_date', 'desc');
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
