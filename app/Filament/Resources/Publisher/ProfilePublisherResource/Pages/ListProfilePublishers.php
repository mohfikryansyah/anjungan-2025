<?php

namespace App\Filament\Resources\Publisher\ProfilePublisherResource\Pages;

use App\Filament\Resources\Publisher\ProfilePublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfilePublishers extends ListRecords
{
    protected static string $resource = ProfilePublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
