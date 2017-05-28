<?php

    use Carbon\Carbon;
    use Illuminate\Http\Request;

    Route::get('/', 'ShawnSandy\PageKit\Controllers\PagesController@index');
    Route::get('/{name}', 'ShawnSandy\PageKit\Controllers\PagesController@page');
    Route::get('/login-reset', 'ShawnSandy\PageKit\Controllers\PagesController@resetLogin');
    Route::any('/send/mail/', 'ShawnSandy\PageKit\Controllers\PageKitController@contactUs');

    Route::resource('md', 'ShawnSandy\PageKit\Controllers\MarkdownController');

    Route::get('test-login', function (Request $request) {

        return Carbon::now()->parse('2015-12-20')->diffForHumans();

    });
