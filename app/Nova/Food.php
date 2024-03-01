<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Food extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Food>
     */
    public static $model = \App\Models\Food::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'category',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('name')
                ->sortable(),

            // BelongsTo::make('category')
            //     ->sortable()
            //     ->searchable()
            //     ->withSubtitles()
            //     ->showCreateRelationButton()
            //     ->modalSize('5xl'),

            // BelongsTo::make('location')
            //     ->sortable()
            //     ->searchable()
            //     ->withSubtitles()
            //     ->showCreateRelationButton()
            //     ->modalSize('5xl'),

            Textarea::make('description'),

            Number::make('price_small')
                ->min(0)
                ->required()
                ->step(.02),

            Number::make('price_regular')
                ->min(0)
                ->required()
                ->step(.02),

            Number::make('price_large')
                ->min(0)
                ->required()
                ->step(.02),

            Boolean::make('status')->default(true),

            Text::make('image_path'),



        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
