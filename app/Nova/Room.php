<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Repeater;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Room extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Room>
     */
    public static $model = \App\Models\Room::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'features'
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
                ->required()
                ->sortable(),

            // BelongsTo::make('location_id')
            //     ->required(),

            // BelongsTo::make('room_type')
            //     ->required(),

            Number::make('max_person_count')
                ->required(),

            Number::make('number_of_rooms')
                ->required(),

            Number::make('available_rooms')
                ->required(),

            Text::make('description'),

            Repeater::make('Add Feature', 'features')
                ->repeatables([
                    \App\Nova\Repeater\Facilities::make()->confirmRemoval(),
                ])
                ->asJson()
                ->rules('required'),

            Number::make('price')
                ->required(),

            Text::make('image_path'),

            //created_by, updated_by foreign keys

            // HasMany::make('reservations'),
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
