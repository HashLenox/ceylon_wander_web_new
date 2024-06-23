<?php

namespace App\Nova\Repeater;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Http\Requests\NovaRequest;

class RoomPrice extends Repeatable
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
            ID::make()->sortable(),

            Number::make('No of adults', 'adults')
                ->min(0)
                ->required()
                ->help('Total number of rooms'),

            Number::make('No of childs', 'child')
                ->min(0)
                ->required()
                ->help('Total number of rooms'),

            Boolean::make('With meal', 'meal'),

            Number::make('Net Price', 'price')
                ->min(0)
                ->required()
                ->step(.02),

            Number::make('Discount amount', 'discount')
                ->min(0)
                ->required()
                ->step(.02)
                ->help('This amount will be substract from Selling price'),

            // Number::make('Selling amount')
            //     ->min(0)
            //     ->required()
            //     ->step(.02)
            //     ->help('Showing price to customers')
            //     ->readonly()
            //     ->dependsOn(
            //         ['price', 'discount'],
            //         function (Number $field, NovaRequest $request, FormData $formData) {
            //             $field->value($formData->price - $formData->discount);
            //         }
            //     ),
        ];
    }
}
