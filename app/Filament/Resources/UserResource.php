<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section as ComponentsSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Pengaturan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    Grid::make([
                        'default' => 1,
                        'md' => 2
                    ])
                    ->schema([
                        TextInput::make('name')->required()->minLength(5),
                        TextInput::make('email')->required()->email()->unique(),
                        Select::make('roles')
                        ->relationship('roles', 'name', fn ($query) => $query->where('name', '!=', 'leader'))
                        ->required(),
                        TextInput::make('password')
                        ->password()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                        ->dehydrated(fn ($state) => filled($state))
                         ->required(fn (Page $livewire) => ($livewire instanceof CreateUser))
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('nama')
                ->sortable()
                ->searchable(),
                TextColumn::make('email')
                ->sortable()
                ->searchable(),
                TextColumn::make('roles')
                ->badge()
                ->formatStateUsing(fn ($record) => $record->roles[0]->name)
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }   
    
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                ComponentsSection::make()
                ->schema([
                    TextEntry::make('name'),
                    TextEntry::make('roles')
                    ->badge(true)
                    ->formatStateUsing(fn ($record) => $record->roles[0]->name),
                    TextEntry::make('email'),
                        
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereHas('roles', function($roles) {
            $roles->where('name', '!=', 'leader');
        });
    }
}
