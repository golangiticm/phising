<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DanaResource\Pages;
use App\Filament\Resources\DanaResource\RelationManagers;
use App\Models\Dana;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DanaResource extends Resource
{
    protected static ?string $model = Dana::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'DANA';

    protected static ?string $modelLabel = 'DANA';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('no_telephone')
                            ->placeholder('0812-3456-7890')
                            ->prefixIcon('heroicon-o-phone')
                            ->label('Nomor')
                            ->mask('9999-9999-9999')
                            ->tel()
                            ->required(),
                        Forms\Components\TextInput::make('password')
                            ->placeholder('*****')
                            ->prefixIcon('heroicon-o-lock-closed')
                            ->password()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\Toggle::make('check')
                            ->required(),
                        Forms\Components\Toggle::make('login')
                            ->required(),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_telephone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('password')
                    ->searchable(),
                Tables\Columns\IconColumn::make('check')
                    ->boolean(),
                Tables\Columns\IconColumn::make('login')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListDanas::route('/'),
        ];
    }
}
