<?php

namespace App\Filament\Resources\Publisher\TataUsahaPublisherResource\Pages;

use App\Filament\Resources\Publisher\TataUsahaPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTataUsahaPublisher extends ViewRecord
{
    protected static string $resource = TataUsahaPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
