<?php

namespace App\Filament\Admin\Resources\LatestPostResource\Pages;

use App\Filament\Admin\Resources\LatestPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLatestPosts extends ListRecords
{
    protected static string $resource = LatestPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
