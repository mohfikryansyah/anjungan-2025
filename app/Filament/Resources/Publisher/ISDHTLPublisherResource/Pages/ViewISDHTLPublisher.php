<?php

namespace App\Filament\Resources\Publisher\ISDHTLPublisherResource\Pages;

use App\Filament\Resources\Publisher\ISDHTLPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewISDHTLPublisher extends ViewRecord
{
    protected static string $resource = ISDHTLPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
