<?php

namespace App\Filament\Resources\Publisher\ProfilePublisherResource\Pages;

use App\Filament\Resources\Publisher\ProfilePublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProfilePublisher extends ViewRecord
{
    protected static string $resource = ProfilePublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
