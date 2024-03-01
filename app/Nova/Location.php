<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Repeater;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Location extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Location>
     */
    public static $model = \App\Models\Location::class;

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
        'type',
        'contact_no',
        'address',
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
                ->sortable()
                ->rules('required'),


            Select::make('type')->options([
                '1' => 'Travel Location',
                '2' => 'Restaurant',
                '3' => 'Accommodation',
            ])
                ->sortable()
                ->rules('required'),

            BelongsTo::make('city')
                ->sortable()
                ->rules('required'),

            BelongsTo::make('category')
                ->sortable()
                ->rules('required')
                ->searchable()
                ->showCreateRelationButton(),

            Textarea::make('description'),

            Number::make('longitude')
                ->step(0.01)
                ->min(0)
                ->rules('required'),

            Number::make('latitude')
                ->step(0.01)
                ->min(0)
                ->rules('required'),


            Text::make('address')
                ->sortable()
                ->rules('required'),

            Text::make('contact_no')
                ->rules('required'),

            Boolean::make('status'),

            Number::make('points')
                ->rules('required'),

            Text::make('image_path'),


            Repeater::make('Add Feature', 'features')
                ->repeatables([
                    \App\Nova\Repeater\Facilities::make()->confirmRemoval(),
                ])
                ->asJson()
                ->rules('required'),

            // created_by
            // updated_by foreign keys

            HasMany::make('reservations'),

            HasMany::make('foods'),

            HasMany::make('statistics'),

            HasMany::make('transactions'),

            HasMany::make('reviews'),

            HasMany::make('rooms'),

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
