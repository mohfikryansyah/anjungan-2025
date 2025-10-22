<?php

namespace App\Filament\Resources\Publisher\PublikasiPublisherResource\Pages;

use App\Filament\Resources\Publisher\PublikasiPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPublikasiPublisher extends ViewRecord
{
    protected static string $resource = PublikasiPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
