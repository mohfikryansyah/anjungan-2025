<?php

namespace App\Filament\Resources\Publisher\TataUsahaPublisherResource\Pages;

use App\Filament\Resources\Publisher\TataUsahaPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTataUsahaPublisher extends EditRecord
{
    protected static string $resource = TataUsahaPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
