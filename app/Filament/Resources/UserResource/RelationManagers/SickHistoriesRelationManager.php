<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\SickHistoryResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class SickHistoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'sickHistories';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\DatePicker::make('start_date')
                            ->required(),
                        Forms\Components\DatePicker::make('end_date'),
                    ]),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->label(__('Description')),
                Tables\Columns\TextColumn::make('start_date')
                    ->label(__('Start Date'))
                    ->date(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label(__('End Date'))
                    ->date(),
                Tables\Columns\TextColumn::make('duration')
                    ->formatStateUsing(fn ($record) => is_null($record->end_date) ? '?' : $record->duration.' days'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->url(fn ($record) => SickHistoryResource::getUrl().'/'.$record->getKey()),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
