<?php

namespace App\Filament\Resources\PKHResource\Pages;

use App\Filament\Resources\PKHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPKH extends EditRecord
{
    protected static string $resource = PKHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
