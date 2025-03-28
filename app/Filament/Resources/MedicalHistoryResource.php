<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicalHistoryResource\Pages;
use App\Filament\Resources\MedicalHistoryResource\RelationManagers\MedicinesRelationManager;
use App\Models\MedicalHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MedicalHistoryResource extends Resource
{
    protected static ?string $model = MedicalHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\DatePicker::make('check_date')
                            ->required(),
                        Forms\Components\TextInput::make('hospital_name')
                            ->maxLength(255),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sickHistory.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hospital_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make(__('Medical History'))
                    ->schema([
                        Infolists\Components\TextEntry::make('sickHistory.user.name')
                            ->label(__('Name')),
                        Infolists\Components\TextEntry::make('sickHistory.start_date')
                            ->date()
                            ->label(__('Start Date')),
                        Infolists\Components\TextEntry::make('sickHistory.end_date')
                            ->date()
                            ->label(__('End Date')),
                        Infolists\Components\TextEntry::make('sickHistory.user.name')
                            ->label(__('Check Date')),
                        Infolists\Components\TextEntry::make('hospital_name')
                            ->label(__('Hospital Name')),
                    ])
                    ->columns(3),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            MedicinesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedicalHistories::route('/'),
            'view' => Pages\ViewMedicalHistory::route('/{record}'),
            'edit' => Pages\EditMedicalHistory::route('/{record}/edit'),
        ];
    }
}
