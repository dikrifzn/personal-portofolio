<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\TextInput::make('repository_url')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\Section::make('Upload Images')
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\FileUpload::make('image1')
                                    ->image()
                                    ->directory('projects')
                                    ->required(),
                                Forms\Components\FileUpload::make('image2')
                                    ->image()
                                    ->directory('projects')
                                    ->required(),
                                Forms\Components\FileUpload::make('image3')
                                    ->image()
                                    ->directory('projects')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('repository_url'),
                Tables\Columns\ImageColumn::make('image1'),
                Tables\Columns\ImageColumn::make('image2'),
                Tables\Columns\ImageColumn::make('image3'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
