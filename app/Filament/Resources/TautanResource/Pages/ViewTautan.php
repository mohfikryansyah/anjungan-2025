<?php

namespace App\Filament\Resources\TautanResource\Pages;

use App\Filament\Resources\TautanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTautan extends ViewRecord
{
    protected static string $resource = TautanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
