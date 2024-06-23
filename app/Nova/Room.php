<?php

namespace App\Nova;

use DigitalCreative\Filepond\Filepond;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
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

            BelongsTo::make('location')
                ->sortable()
                ->searchable()
                ->withSubtitles()
                ->showCreateRelationButton()
                ->modalSize('5xl'),

            Text::make('Name')
                ->required()
                ->sortable(),

            BelongsTo::make('Room Type', 'room_type')
                ->sortable()
                ->searchable()
                ->withSubtitles()
                ->showCreateRelationButton()
                ->modalSize('5xl'),

            Number::make('Block Size', 'size')
                ->min(0)
                ->required()
                ->step(.02),

            Text::make('Description')
                ->hideFromIndex()
                ->required(),

            Number::make('Total', 'number_of_rooms')
                ->min(0)
                ->required()
                ->hideFromIndex()
                ->help('Total number of rooms'),

            Number::make('Available', 'available_rooms')
                ->min(0)
                ->required()
                ->help('Total number of available rooms'),

            Boolean::make('free_cancellation'),

            Boolean::make('prepayment'),

            Boolean::make('smoking'),

            Filepond::make('Images', 'images')
                ->multiple(),

            Repeater::make('Room Prices', 'price')
                ->repeatables([
                    \App\Nova\Repeater\RoomPrice::make()->confirmRemoval(),
                ])
                ->asJson()
                ->rules('required')
                ->hideFromIndex(),

            Repeater::make('Add Feature', 'features')
                ->repeatables([
                    \App\Nova\Repeater\Facilities::make()->confirmRemoval(),
                ])
                ->asJson()
                ->rules('required')
                ->hideFromIndex(),

            Repeater::make('Room Facilities', 'facilities')
                ->repeatables([
                    \App\Nova\Repeater\RoomFacilities::make()->confirmRemoval(),
                ])
                ->asJson()
                ->rules('required')
                ->hideFromIndex(),



            //created_by, updated_by foreign keys

            HasMany::make('reservations'),
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
