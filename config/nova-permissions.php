<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User model class
    |--------------------------------------------------------------------------
    */

    'user_model' => 'App\Models\User',

    /*
    |--------------------------------------------------------------------------
    | Nova User resource tool class
    |--------------------------------------------------------------------------
    */

    'user_resource' => 'App\Nova\User',

    /*
    |--------------------------------------------------------------------------
    | The group associated with the resource
    |--------------------------------------------------------------------------
    */

    'role_resource_group' => 'Other',

    /*
    |--------------------------------------------------------------------------
    | Database table names
    |--------------------------------------------------------------------------
    | When using the "HasRoles" trait from this package, we need to know which
    | table should be used to retrieve your roles. We have chosen a basic
    | default value but you may easily change it to any table you like.
    */

    'table_names' => [
        'roles' => 'roles',

        'role_permission' => 'role_permission',

        'role_user' => 'role_user',

        'users' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Permissions
    |--------------------------------------------------------------------------
    */

    'permissions' => [

        //user

        'view user' => [
            'display_name' => 'View user',
            'description' => 'Can view user',
            'group' => 'User',
        ],

        'create user' => [
            'display_name' => 'Create user',
            'description' => 'Can create user',
            'group' => 'User',
        ],

        'edit user' => [
            'display_name' => 'Edit user',
            'description' => 'Can edit user',
            'group' => 'User',
        ],

        'delete user' => [
            'display_name' => 'Delete user',
            'description' => 'Can delete user',
            'group' => 'User',
        ],

        'restore user' => [
            'display_name' => 'Restore user',
            'description' => 'Can restore user',
            'group' => 'User',
        ],

        //role

        'view role' => [
            'display_name' => 'View role',
            'description' => 'Can view role',
            'group' => 'Role',
        ],

        'create role' => [
            'display_name' => 'Create role',
            'description' => 'Can create role',
            'group' => 'Role',
        ],

        'edit role' => [
            'display_name' => 'Edit role',
            'description' => 'Can edit role',
            'group' => 'Role',
        ],

        'delete role' => [
            'display_name' => 'Delete role',
            'description' => 'Can delete role',
            'group' => 'Role',
        ],

        'restore role' => [
            'display_name' => 'Restore role',
            'description' => 'Can restore role',
            'group' => 'Role',
        ],
    ],
];
