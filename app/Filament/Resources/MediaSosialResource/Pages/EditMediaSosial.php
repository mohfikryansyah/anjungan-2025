<?php

namespace App\Filament\Resources\MediaSosialResource\Pages;

use App\Filament\Resources\MediaSosialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMediaSosial extends EditRecord
{
    protected static string $resource = MediaSosialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
