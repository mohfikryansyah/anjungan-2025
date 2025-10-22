<?php

namespace App\Filament\Resources\ISDHTLResource\Pages;

use App\Filament\Resources\ISDHTLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListISDHTLS extends ListRecords
{
    protected static string $resource = ISDHTLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
