<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
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
        'location_id',
        'room_id',
        'user_id',
        'first_date',
        'last_date',
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
                ->rules('required')
                ->hideFromIndex(),

            Date::make('Last Date', 'last_date')
                ->rules('required')
                ->hideFromIndex(),

            Boolean::make('Approval')
                ->rules('required')
                ->default(false)
                ->hideWhenCreating(),

            Boolean::make('Arrived')
                ->rules('required')
                ->default(false)
                ->hideWhenCreating(),

            Boolean::make('checkout')
                ->rules('required')
                ->default(false)
                ->hideWhenCreating(),

            Boolean::make('paid')
                ->rules('required')
                ->default(false)
                ->hideWhenCreating(),


            Select::make('Reservation Status', 'status')->options([
                '1' => 'Cancelled',
                '2' => 'Pending',
                '3' => 'Completed',
            ])
                ->required()
                ->sortable(),

            Number::make('Ammount', 'price')
                ->min(0)
                ->required()
                ->step(.02)
                ->hideFromIndex(),

            Number::make('Cut Ammount', 'cut_amount')
                ->min(0)
                ->required()
                ->step(.02)
                ->hideFromIndex(),

            Boolean::make('Status', 'status')
                ->required()
                ->default(true),

            Text::make('remark')
                ->hideFromIndex(),
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
