<?php

namespace App\Filament\Resources\SickHistoryResource\Pages;

use App\Filament\Resources\SickHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSickHistories extends ListRecords
{
    protected static string $resource = SickHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
