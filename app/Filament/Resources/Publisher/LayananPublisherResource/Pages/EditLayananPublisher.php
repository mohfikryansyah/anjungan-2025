<?php

namespace App\Filament\Resources\Publisher\LayananPublisherResource\Pages;

use App\Filament\Resources\Publisher\LayananPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLayananPublisher extends EditRecord
{
    protected static string $resource = LayananPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
