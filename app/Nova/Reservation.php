<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Reservation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Reservation>
     */
    public static $model = \App\Models\Reservation::class;

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

            BelongsTo::make('Location')
                ->sortable()
                ->rules('required'),

            BelongsTo::make('Room')
                ->sortable()
                ->rules('required'),

            BelongsTo::make('User')
                ->sortable()
                ->rules('required'),

            Date::make('First Date', 'first_date')
                ->rules('required'),

            Date::make('Last Date', 'last_date')
                ->rules('required'),

            Boolean::make('Approval')
                ->rules('required')
                ->default(false),

            Boolean::make('Arrived')
                ->rules('required')
                ->default(false),


            Select::make('Reservation Status', 'status')->options([
                '1' => 'Cancelled',
                '2' => 'Pending',
                '3' => 'Completed',
            ])
                ->required()
                ->sortable(),

            Boolean::make('Availability', 'status')
                ->required()
                ->default(true),

            Text::make('remark'),
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
