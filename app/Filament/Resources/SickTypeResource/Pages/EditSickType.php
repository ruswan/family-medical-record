<?php

namespace App\Filament\Resources\SickTypeResource\Pages;

use App\Filament\Resources\SickTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSickType extends EditRecord
{
    protected static string $resource = SickTypeResource::class;

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
