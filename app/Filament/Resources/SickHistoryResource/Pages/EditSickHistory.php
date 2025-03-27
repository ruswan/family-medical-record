<?php

namespace App\Filament\Resources\SickHistoryResource\Pages;

use App\Filament\Resources\SickHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSickHistory extends EditRecord
{
    protected static string $resource = SickHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
