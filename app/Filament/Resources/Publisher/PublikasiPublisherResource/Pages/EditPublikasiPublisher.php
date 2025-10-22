<?php

namespace App\Filament\Resources\Publisher\PublikasiPublisherResource\Pages;

use App\Filament\Resources\Publisher\PublikasiPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublikasiPublisher extends EditRecord
{
    protected static string $resource = PublikasiPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
