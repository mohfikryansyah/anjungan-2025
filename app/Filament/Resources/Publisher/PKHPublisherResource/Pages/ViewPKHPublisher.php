<?php

namespace App\Filament\Resources\Publisher\PKHPublisherResource\Pages;

use App\Filament\Resources\Publisher\PKHPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPKHPublisher extends ViewRecord
{
    protected static string $resource = PKHPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
