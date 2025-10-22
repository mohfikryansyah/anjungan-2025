<?php

namespace App\Filament\Resources\LayananResource\Pages;

use App\Filament\Resources\LayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLayanan extends ViewRecord
{
    protected static string $resource = LayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
