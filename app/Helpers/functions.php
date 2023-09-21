<?php

use Illuminate\Support\Str;
use App\Repositories\Repository;


if (!function_exists('model')) {
    function model($string): string
    {
        return 'App\Models\\' . Str::ucfirst($string);
    }
}


if (!function_exists('repo')) {
    function repo($model): Repository
    {
        $repo = "\\App\Repositories\\$model.Repository::class";
        return new $repo();
    }
}


if (!function_exists('isAdmin')) {
    function isAdmin($user): bool
    {
        return $user instanceof User;
    }
}

