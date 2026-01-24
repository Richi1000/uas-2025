<?php

namespace App\Filament\Admin\Resources\CtaResource\Pages;

use App\Filament\Admin\Resources\CtaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCta extends EditRecord
{
    protected static string $resource = CtaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if ($data['is_active']) {
            \App\Models\Cta::where('section_key', 'cta_main')
                ->where('id', '!=', $this->record->id)
                ->update(['is_active' => false]);
        }

        return $data;
    }
}
