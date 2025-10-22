<?php

namespace App\Filament\Resources\ISDHTLResource\Pages;

use App\Filament\Resources\ISDHTLResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewISDHTL extends ViewRecord
{
    protected static string $resource = ISDHTLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
