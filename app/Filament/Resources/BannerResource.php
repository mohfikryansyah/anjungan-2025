<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Banner;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BannerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BannerResource\RelationManagers;
use Filament\Tables\Columns\IconColumn;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Web';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Grid::make([
                            'default' => 1,
                            'md' => 2,
                        ])->schema([
                            TextInput::make('title')->rules(['required', 'min:3', 'max:25'])->required(),
                            TextInput::make('subtitle')->rules(['nullable', 'min:3']),
                        ])->columnSpan(2),
                        FileUpload::make('image_path')
                            ->image()
                            ->directory('banners')
                            ->label('Gambar dengan Rasio 16:9')
                            ->rules(['required', 'image', 'max:1024', 'dimensions:ratio=16/9'])
                            ->columnSpan(2),
                    ])->columnSpan([
                        'default' => 3,
                        'lg' => 2,
                    ]),

                Toggle::make('is_active')->label('Tampilkan banner')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')->label('Banner'),
                TextColumn::make('title'),
                IconColumn::make('is_active')->label('Ditampilkan')->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
