<?php

namespace App\Filament\Resources\TautanResource\Pages;

use App\Filament\Resources\TautanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTautans extends ListRecords
{
    protected static string $resource = TautanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
