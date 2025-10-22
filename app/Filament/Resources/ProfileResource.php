<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profile;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use App\Filament\Resources\ProfileResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfileResource\RelationManagers;
use Filament\Infolists\Components\Section as ComponentsSection;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?int $navigationSort = 2;
    
    protected static ?string $navigationGroup = 'Konten';

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
                        ])->columnSpan(2),
                        RichEditor::make('body')->rules(['required'])->required()->columnSpan(2),
                    ])->columnSpan([
                        'default' => 3,
                        'lg' => 2,
                    ]),
                Section::make()->schema([
                    FileUpload::make('file')
                        ->label('File')
                        ->disk('public')
                        ->directory('profile'),
                ])->columnSpan([
                    'default' => 3,
                    'lg' => 1,
                ]),

                Toggle::make('published')->label('Published')->default(true),
            ])->columns(3);
    }

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
            // ->formatStateUsing(function($record) {
            //     return $record->published ? 
            //     "<span class='text-primary-600 font-semibold'>Dipublish</span>" : 
            //     "<span class='text-danger-600 font-semibold'>Tidak dipublish</span>";
            // })->html()
        ])
        ->filters([
            TernaryFilter::make('published'),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'view' => Pages\ViewProfile::route('/{record}'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }   
    
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                ComponentsSection::make()
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
        return auth()->user()->hasRole('admin');
    }
}
