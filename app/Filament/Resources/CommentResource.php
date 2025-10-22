<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $modelLabel = 'Komentar';

    protected static ?int $navigationSort = 10;
    
    protected static ?string $navigationGroup = 'Umpan Balik';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->sortable()
                ->searchable(),
                TextColumn::make('telepon')
                ->sortable()
                ->searchable(),
                TextColumn::make('created_at')
                ->label('Tanggal Dibuat')
                ->date('d F Y')
                ->sortable(),
                TextColumn::make('model')
                ->label('Konten')
                ->formatStateUsing(function($record) {
                    $model = explode('\\', $record->model);
                    return $model[2];
                }),
                ToggleColumn::make('published')
            ])
            ->defaultSort('created_at', 'DESC')
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListComments::route('/'),
            'view' => Pages\ViewComment::route('/{record}')
        ];
    }
    
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('nama'),
                TextEntry::make('telepon'),
                TextEntry::make('ulasan')
                    ->html()
                    ->columnSpanFull(),
            ]);
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
