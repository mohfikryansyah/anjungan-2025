<?php

namespace App\Filament\Resources\Publisher\PostPublihserResource\Pages;

use App\Filament\Resources\Publisher\PostPublihserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostPublihser extends ViewRecord
{
    protected static string $resource = PostPublihserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
