<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Voyager API Routes
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with VoyagerBreadContract.
|
*/

Route::group(['as' => 'joy-voyager-bread-contract.'], function () {
    // event(new Routing()); @deprecated

    $namespacePrefix = '\\' . config('joy-voyager-bread-contract.controllers.namespace') . '\\';

    // event(new RoutingAfter()); @deprecated
});
