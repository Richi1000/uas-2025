<?php

namespace App\Filament\Admin\Resources\LatestPostResource\Pages;

use App\Filament\Admin\Resources\LatestPostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLatestPost extends CreateRecord
{
    protected static string $resource = LatestPostResource::class;
}
