<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TautanResource\Pages;
use App\Filament\Resources\TautanResource\RelationManagers;
use App\Models\Tautan;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section as ComponentsSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TautanResource extends Resource
{
    protected static ?string $model = Tautan::class;

    protected static ?string $navigationIcon = 'heroicon-m-link';

    protected static ?int $navigationSort = 3;
    
    protected static ?string $navigationGroup = 'Web';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                        ->schema([
                            TextInput::make('name')
                                ->required()
                                ->unique(),
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
                //
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
            'index' => Pages\ListTautans::route('/'),
            'create' => Pages\CreateTautan::route('/create'),
            'view' => Pages\ViewTautan::route('/{record}'),
            'edit' => Pages\EditTautan::route('/{record}/edit'),
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                ComponentsSection::make()
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('link')
                ])
            ]);
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('admin');
    }
}
