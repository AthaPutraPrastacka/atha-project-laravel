<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebProjectResource\Pages;
use App\Filament\Resources\WebProjectResource\RelationManagers;
use App\Models\WebProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebProjectResource extends Resource
{
    protected static ?string $model = WebProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Project Name'),

                Forms\Components\TextInput::make('description')
                    ->label('Description')
                    ->nullable(),

                Forms\Components\FileUpload::make('photo')
                    ->label('Project Photo')
                    ->image()
                    ->disk('public') // Gunakan disk 'public'
                    ->directory('photos') // Simpan di folder 'photos'
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg'])
                    ->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Project Name'),

                Tables\Columns\TextColumn::make('description')
                    ->label('Description'),

                Tables\Columns\ImageColumn::make('photo')
                    ->label('Photo')
                    ->disk('public') // Menggunakan disk storage 'public'
                    ->size(50), // Ukuran gambar
                
            
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWebProjects::route('/'),
            'create' => Pages\CreateWebProject::route('/create'),
            'edit' => Pages\EditWebProject::route('/{record}/edit'),
        ];
    }
}
