<?php

namespace App\Filament\Resources\Publisher\LayananPublisherResource\Pages;

use App\Filament\Resources\Publisher\LayananPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLayananPublisher extends ViewRecord
{
    protected static string $resource = LayananPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
