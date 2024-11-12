<?php

namespace App\Filament\Resources\WebProjectResource\Pages;

use App\Filament\Resources\WebProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebProject extends EditRecord
{
    protected static string $resource = WebProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
