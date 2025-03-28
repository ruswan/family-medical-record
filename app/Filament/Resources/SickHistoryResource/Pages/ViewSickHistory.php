<?php

namespace App\Filament\Resources\SickHistoryResource\Pages;

use App\Filament\Resources\SickHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSickHistory extends ViewRecord
{
    protected static string $resource = SickHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
