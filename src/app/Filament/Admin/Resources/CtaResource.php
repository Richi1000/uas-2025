<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CtaResource\Pages;
use App\Models\Cta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CtaResource extends Resource
{
    protected static ?string $model = Cta::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Call To Action';
    protected static ?string $pluralModelLabel = 'CTA';
    protected static ?string $navigationGroup = 'Landing Page';
    protected static ?int $navigationSort = 30;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('section_key')
                ->label('Section Key')
                ->default('cta_main')
                ->disabled()
                ->dehydrated(true)
                ->required(),

            Forms\Components\TextInput::make('title')
                ->label('Judul CTA')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->rows(3),

            Forms\Components\TextInput::make('button_text')
                ->label('Teks Tombol')
                ->required()
                ->maxLength(100),

            Forms\Components\TextInput::make('button_link')
                ->label('Link Tombol')
                ->placeholder('#pricing'),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktifkan CTA')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),

                Tables\Columns\TextColumn::make('button_text')
                    ->label('Tombol'),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCtas::route('/'),
            'create' => Pages\CreateCta::route('/create'),
            'edit' => Pages\EditCta::route('/{record}/edit'),
        ];
    }
}
