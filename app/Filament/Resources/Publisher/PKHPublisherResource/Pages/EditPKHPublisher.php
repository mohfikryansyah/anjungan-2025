<?php

namespace App\Filament\Resources\Publisher\PKHPublisherResource\Pages;

use App\Filament\Resources\Publisher\PKHPublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPKHPublisher extends EditRecord
{
    protected static string $resource = PKHPublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
