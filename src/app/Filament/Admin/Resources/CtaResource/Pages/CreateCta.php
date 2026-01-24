<?php

namespace App\Filament\Admin\Resources\CtaResource\Pages;

use App\Filament\Admin\Resources\CtaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCta extends CreateRecord
{
    protected static string $resource = CtaResource::class;
     protected function mutateFormDataBeforeCreate(array $data): array
    {
        // pastikan hanya satu CTA aktif
        if ($data['is_active']) {
            \App\Models\Cta::where('section_key', 'cta_main')
                ->update(['is_active' => false]);
        }

        return $data;
    }
}
