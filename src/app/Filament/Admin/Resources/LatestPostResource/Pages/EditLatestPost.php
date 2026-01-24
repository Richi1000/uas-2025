<?php

namespace App\Filament\Admin\Resources\LatestPostResource\Pages;

use App\Filament\Admin\Resources\LatestPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatestPost extends EditRecord
{
    protected static string $resource = LatestPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
