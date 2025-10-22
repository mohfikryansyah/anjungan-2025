<?php

namespace App\Filament\Resources\Publisher\ISDHTLPublisherResource\Pages;

use App\Filament\Resources\Publisher\ISDHTLPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListISDHTLPublishers extends ListRecords
{
    protected static string $resource = ISDHTLPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
