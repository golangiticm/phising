<?php

namespace App\Filament\Resources\DanaResource\Pages;

use App\Filament\Resources\DanaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDana extends EditRecord
{
    protected static string $resource = DanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
