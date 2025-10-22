<?php

namespace App\Filament\Resources\Publisher\LayananPublisherResource\Pages;

use App\Filament\Resources\Publisher\LayananPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLayananPublishers extends ListRecords
{
    protected static string $resource = LayananPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
