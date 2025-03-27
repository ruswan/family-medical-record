<?php

namespace App\Filament\Resources\SickTypeResource\Pages;

use App\Filament\Resources\SickTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSickTypes extends ListRecords
{
    protected static string $resource = SickTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
