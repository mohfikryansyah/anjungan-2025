<?php

namespace App\Filament\Resources\Publisher\PostPublihserResource\Pages;

use App\Filament\Resources\Publisher\PostPublihserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostPublihser extends EditRecord
{
    protected static string $resource = PostPublihserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
