<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;
use Filament\Forms\Components\Section;
use Filament\Infolists\Components\TextEntry;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?int $navigationSort = 1;
    
    protected static ?string $navigationGroup = 'Web';

    public static function form(Form $form): Form
    {
        return $form->schema([TextInput::make('name')->required(), TextInput::make('slug')->required()]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'), 
                TextColumn::make('slug'),
                TextColumn::make('posts_count')
                    ->state(function (Model $record): int {
                        return $record->post()->count();
                 }),
            ])

            ->filters([
                //
            ])

            ->actions([
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                ])
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('admin');
    }
}
