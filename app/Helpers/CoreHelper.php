<?php

namespace App\Helpers;

use App\Nova\User;
use Laravel\Nova\Nova;

class CoreHelper
{
    public static function getCreatedBy($model)
    {
        if ($model->createdBy?->name == null) {
            return '-';
        } else {
            return '<a class="link-default" href="' . Nova::url('/resources/' . User::uriKey() . '/' . $model->created_by) . '">' . $model->createdBy->name . '</a>';
        }
    }

}
