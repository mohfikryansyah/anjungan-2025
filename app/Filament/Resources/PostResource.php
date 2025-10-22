<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use PhpParser\Node\Expr\Ternary;
use Filament\Forms\Components\Grid;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 2;
    
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
                            Select::make('category_id')
                                ->label('Category')
                                ->rules(['required'])
                                ->preload()
                                ->required()
                                ->searchable()
                                ->relationship('category', 'name')
                                ->native(false),
                        ])->columnSpan(2),
                        RichEditor::make('body')->rules(['required'])->required()->columnSpan(2),
                    ])->columnSpan([
                        'default' => 3,
                        'lg' => 2,
                    ]),
                Section::make()->schema([
                    FileUpload::make('post_image')
                        ->label('Image')
                        ->disk('public')
                        ->directory('post-images'),
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
                ->sortable()
                ->searchable(),
                TextColumn::make('category.name')
                ->sortable()
                ->searchable(),
                TextColumn::make('created_at')
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
                SelectFilter::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->preload()
                ->multiple()
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('admin');
    }
}