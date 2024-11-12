<?php

namespace App\Filament\Resources\WebProjectResource\Pages;

use App\Filament\Resources\WebProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebProjects extends ListRecords
{
    protected static string $resource = WebProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
