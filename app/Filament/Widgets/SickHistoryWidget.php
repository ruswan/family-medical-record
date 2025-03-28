<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\SickHistoryResource;
use App\Models\SickHistory;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class SickHistoryWidget extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                SickHistory::query()
                    ->with('sickTypes')
            )
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->label(__('Name')),
                Tables\Columns\TextColumn::make('description')
                    ->wrap(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->formatStateUsing(fn ($record) => is_null($record->end_date) ? '?' : $record->duration.' days'),

            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->url(SickHistoryResource::getUrl('create')),
            ]);
    }
}
