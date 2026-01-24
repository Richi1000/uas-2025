<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LatestPostResource\Pages;
use App\Models\LatestPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LatestPostResource extends Resource
{
    protected static ?string $model = LatestPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Latest News';
    protected static ?string $pluralModelLabel = 'Latest News';
    protected static ?string $navigationGroup = 'Landing Page';
    protected static ?int $navigationSort = 40;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Judul')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('excerpt')
                ->label('Ringkasan')
                ->rows(4)
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->label('Thumbnail')
                ->directory('latest-posts')
                ->image()
                ->imagePreviewHeight('150'),

            Forms\Components\TextInput::make('author')
                ->label('Penulis')
                ->default('Admin')
                ->required(),

            Forms\Components\DatePicker::make('published_at')
                ->label('Tanggal Publish')
                ->default(now()),

            Forms\Components\Toggle::make('is_active')
                ->label('Tampilkan')
                ->default(true),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(30),

                Tables\Columns\TextColumn::make('author')
                    ->label('Penulis'),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publish')
                    ->date(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->defaultSort('published_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLatestPosts::route('/'),
            'create' => Pages\CreateLatestPost::route('/create'),
            'edit' => Pages\EditLatestPost::route('/{record}/edit'),
        ];
    }
}
