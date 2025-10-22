<?php

namespace App\Filament\Resources\Publisher\PublikasiPublisherResource\Pages;

use App\Filament\Resources\Publisher\PublikasiPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublikasiPublishers extends ListRecords
{
    protected static string $resource = PublikasiPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
