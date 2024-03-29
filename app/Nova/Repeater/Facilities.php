<?php

namespace App\Nova\Repeater;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Facilities extends Repeatable
{
    /**
     * Get the fields displayed by the repeatable.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Select::make('Feature Name', 'name')
                ->options(\App\Models\Feature::pluck('name', 'id'))
                ->searchable()
                ->required()
                ->sortable(),

            Boolean::make('Availability', 'status')
                ->required()
                ->default(true),

        ];
    }
}
