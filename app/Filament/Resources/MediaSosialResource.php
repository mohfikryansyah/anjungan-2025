<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaSosialResource\Pages;
use App\Filament\Resources\MediaSosialResource\RelationManagers;
use App\Models\MediaSosial;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section as ComponentsSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaSosialResource extends Resource
{
    protected static ?string $model = MediaSosial::class;

    protected static ?string $navigationIcon = 'typ-social-flickr';
    
    protected static ?int $navigationSort = 3;
    
    protected static ?string $navigationGroup = 'Web';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                        ->schema([
                            Select::make('tipe_media_sosial_id')
                                ->label('Tipe')
                                ->required()
                                ->preload()
                                ->searchable()
                                ->relationship('tipe_media_sosial', 'name')
                                ->native(false),
                            TextInput::make('link')
                                ->required()
                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tipe_media_sosial.name')
                    ->label('Tipe')
                    ->searchable(),
                TextColumn::make('link')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListMediaSosials::route('/'),
            'create' => Pages\CreateMediaSosial::route('/create'),
            'view' => Pages\ViewMediaSosial::route('/{record}'),
            'edit' => Pages\EditMediaSosial::route('/{record}/edit'),
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                ComponentsSection::make()
                ->schema([
                    TextEntry::make('tipe_media_sosial.name')
                        ->label('Tipe'),
                    TextEntry::make('link')
                ])
            ]);
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('admin');
    }
}
