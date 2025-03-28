<?php

namespace App\Filament\Resources\MedicalHistoryResource\Pages;

use App\Filament\Resources\MedicalHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMedicalHistory extends ViewRecord
{
    protected static string $resource = MedicalHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
