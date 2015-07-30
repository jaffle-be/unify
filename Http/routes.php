<?php

/**
 * store controllers
 */
Route::group([
    'namespace' => 'Themes\Unify\Http\Admin'
], function () {

    Route::group(['prefix' => 'templates/admin'], function () {
        //template files, load at top so we do not end up in the show method
        Route::get('theme/unify', 'ThemeController@unify');
    });

    //actual resource
    Route::group(['prefix' => 'api/admin'], function () {
//        Route::resource('theme', 'ThemeController', ['as' => 'store', 'only' => ['index', 'show', 'store', 'update']]);
    });
});