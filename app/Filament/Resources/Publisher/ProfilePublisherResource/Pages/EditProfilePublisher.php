<?php

namespace App\Filament\Resources\Publisher\ProfilePublisherResource\Pages;

use App\Filament\Resources\Publisher\ProfilePublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfilePublisher extends EditRecord
{
    protected static string $resource = ProfilePublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
