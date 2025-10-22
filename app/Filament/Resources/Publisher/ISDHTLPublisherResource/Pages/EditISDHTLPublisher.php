<?php

namespace App\Filament\Resources\Publisher\ISDHTLPublisherResource\Pages;

use App\Filament\Resources\Publisher\ISDHTLPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditISDHTLPublisher extends EditRecord
{
    protected static string $resource = ISDHTLPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
