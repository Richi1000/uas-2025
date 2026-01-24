<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PricingResource\Pages;
use App\Models\Pricing;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PricingResource extends Resource
{
    protected static ?string $model = Pricing::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Pricing';
    protected static ?string $pluralModelLabel = 'Pricing';

    public static function form(Form $form): Form
    {
        return $form->schema([

            TextInput::make('section_key')
                ->default('pricing_main')
                ->disabled()
                ->dehydrated(true)
                ->required(),

            TextInput::make('small_title')
                ->label('Small Title')
                ->required(),

            TextInput::make('title')
                ->label('Main Title')
                ->required(),

            Textarea::make('description')
                ->label('Description')
                ->rows(3),

            Repeater::make('plans')
                ->label('Pricing Plans')
                ->schema([
                    TextInput::make('name')
                        ->label('Plan Name')
                        ->required(),

                    TextInput::make('description')
                        ->label('Plan Description'),

                    TextInput::make('price')
                        ->numeric()
                        ->required(),

                    TextInput::make('currency')
                        ->default('$')
                        ->maxLength(5),

                    TextInput::make('duration')
                        ->default('/mo'),

                    Toggle::make('featured')
                        ->label('Highlight Plan'),

                    Repeater::make('features')
                        ->label('Features')
                        ->schema([
                            TextInput::make('text')
                                ->label('Feature')
                                ->required(),

                            Toggle::make('active')
                                ->default(true),
                        ])
                        ->collapsed()
                        ->reorderable()
                        ->columnSpanFull(),
                ])
                ->collapsed()
                ->reorderable()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('section_key')->label('Key'),
                TextColumn::make('title')->label('Title'),
                TextColumn::make('updated_at')->label('Updated')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPricings::route('/'),
            'create' => Pages\CreatePricing::route('/create'),
            'edit' => Pages\EditPricing::route('/{record}/edit'),
        ];
    }
}
