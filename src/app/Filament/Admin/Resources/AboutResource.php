<?php
namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    
    protected static ?string $navigationLabel = 'Tentang Kami';
    
    protected static ?string $pluralModelLabel = 'Tentang Kami';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('section_key')
                        ->label('Section Key')
                        ->unique(ignorable: fn($record) => $record)
                        ->required()
                        ->helperText('Contoh: about_main'),
                    
                    TextInput::make('title')
                        ->label('Judul Utama')
                        ->maxLength(255),
                    
                    TextInput::make('subtitle')
                        ->label('Sub Judul')
                        ->maxLength(255),
                    
                    Textarea::make('description')
                        ->label('Deskripsi')
                        ->rows(4),
                    
                    FileUpload::make('image')
                        ->label('Gambar')
                        ->directory('abouts')
                        ->image(),
                ])->columnSpan(2),

                Tabs::make('Metadata Tabs')
                    ->tabs([
                        Tab::make('Tentang Aplikasi')
                            ->schema([
                                Hidden::make('metadata.tentang.key')->default('tentang'),
                                TextInput::make('metadata.tentang.label')
                                    ->label('Label Tab')
                                    ->default('Tentang Aplikasi'),
                                TextInput::make('metadata.tentang.title')
                                    ->label('Judul Konten'),
                                RichEditor::make('metadata.tentang.content')
                                    ->label('Konten')
                                    ->toolbarButtons(['bold', 'italic', 'underline', 'bulletList', 'orderedList']),
                            ]),
                        Tab::make('Visi & Misi')
                            ->schema([
                                Hidden::make('metadata.visi.key')->default('visi'),
                                TextInput::make('metadata.visi.label')
                                    ->label('Label Tab')
                                    ->default('Visi & Misi'),
                                TextInput::make('metadata.visi.title')
                                    ->label('Judul Konten'),
                                RichEditor::make('metadata.visi.content')
                                    ->label('Konten')
                                    ->toolbarButtons(['bold', 'italic', 'underline', 'bulletList', 'orderedList']),
                            ]),
                        Tab::make('Latar Belakang')
                            ->schema([
                                Hidden::make('metadata.latar.key')->default('latar'),
                                TextInput::make('metadata.latar.label')
                                    ->label('Label Tab')
                                    ->default('Latar Belakang'),
                                TextInput::make('metadata.latar.title')
                                    ->label('Judul Konten'),
                                RichEditor::make('metadata.latar.content')
                                    ->label('Konten')
                                    ->toolbarButtons(['bold', 'italic', 'underline', 'bulletList', 'orderedList']),
                            ]),
                    ])->columnSpan(2),
            ])->columns(2);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('section_key')->label('Key')->searchable(),
                TextColumn::make('title')->label('Judul')->searchable(),
                TextColumn::make('created_at')->label('Dibuat')->dateTime(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}