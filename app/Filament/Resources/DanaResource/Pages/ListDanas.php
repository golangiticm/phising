<?php

namespace App\Filament\Resources\DanaResource\Pages;

use App\Filament\Resources\DanaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDanas extends ListRecords
{
    protected static string $resource = DanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
