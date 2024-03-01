<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Repeater;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class City extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\City>
     */
    public static $model = \App\Models\City::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name_en',
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

            BelongsTo::make('district')
                ->sortable()
                ->searchable()
                ->withSubtitles()
                ->showCreateRelationButton()
                ->modalSize('5xl'),

            Text::make('Name English', 'name_en')
                ->sortable()
                ->rules('required'),

            Text::make('Name Sinhala', 'name_si')
                ->sortable()
                ->rules('required'),

            Text::make('Name Tamil', 'name_ta')
                ->sortable()
                ->rules('required'),

            Text::make('Sub Name English', 'sub_name_en')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            Text::make('Sub Name Sinhala', 'sub_name_si')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            Text::make('SUb Name Tamil', 'sub_name_ta')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            Text::make('postcode')
                ->sortable()
                ->rules('required'),

            Number::make('latitude')
                ->sortable()
                ->step(0.01)
                ->min(0)
                ->rules('max:20', 'required')
                ->hideFromIndex(),

            Number::make('longitude')
                ->sortable()
                ->step(0.01)
                ->min(0)
                ->rules('max:20', 'required')
                ->hideFromIndex(),

            Text::make('name')
                ->sortable()
                ->rules('required'),

            BelongsTo::make('category')
                ->sortable()
                ->rules('required')
                ->searchable()
                ->showCreateRelationButton(),

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

            Text::make('description'),

            Number::make('longitude')
                ->step(0.01)
                ->min(0)
                ->rules('required'),

            Number::make('latitude')
                ->step(0.01)
                ->min(0)
                ->rules('required'),

            Text::make('image_path'),

            Text::make('address')
                ->sortable()
                ->rules('required'),

            Text::make('contact_no')
                ->rules('required'),

            Boolean::make('status'),

            Number::make('points')
                ->rules('required'),


            Repeater::make('Add Feature', 'features')
                ->repeatables([
                    \App\Nova\Repeater\Facilities::make()->confirmRemoval(),
                ])
                ->asJson()
                ->rules('required'),

            HasMany::make('locations'),

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
