<?php

namespace App\Filament\Resources\ISDHTLResource\Pages;

use App\Filament\Resources\ISDHTLResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditISDHTL extends EditRecord
{
    protected static string $resource = ISDHTLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
