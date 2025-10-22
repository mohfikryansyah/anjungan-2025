<?php

namespace App\Filament\Resources\PKHResource\Pages;

use App\Filament\Resources\PKHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPKHS extends ListRecords
{
    protected static string $resource = PKHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
