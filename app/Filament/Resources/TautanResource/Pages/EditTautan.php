<?php

namespace App\Filament\Resources\TautanResource\Pages;

use App\Filament\Resources\TautanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTautan extends EditRecord
{
    protected static string $resource = TautanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
