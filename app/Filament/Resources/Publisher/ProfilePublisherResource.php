<?php

namespace App\Filament\Resources\Publisher;

use App\Filament\Resources\Publisher\ProfilePublisherResource\Pages;
use App\Filament\Resources\Publisher\ProfilePublisherResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfilePublisherResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?int $navigationSort = 2;
    
    protected static ?string $navigationGroup = 'Konten';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Judul')
                ->sortable()
                ->searchable(),
                TextColumn::make('created_at')
                ->label('Tanggal Dibuat')
                ->date()
                ->sortable(),
                ToggleColumn::make('published')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProfilePublishers::route('/'),
            'view' => Pages\ViewProfilePublisher::route('/{record}'),
        ];
    }   
    
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->schema([
                        TextEntry::make('title'),
                        TextEntry::make('body')
                            ->html()
                            ->columnSpanFull(),
                        ViewEntry::make('file')
                            ->view('admin.file')
                    ])
                ]);
            }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('leader');
    } 

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }
}
