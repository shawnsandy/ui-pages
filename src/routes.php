<?php

use Carbon\Carbon;
use Illuminate\Http\Request;

Route::group(
    ['prefix' => 'page', 'middleware' => ['web']], function () {
    Route::get('', 'ShawnSandy\PageKit\Controllers\PagesController@index');
    Route::get('{name}', 'ShawnSandy\PageKit\Controllers\PagesController@page');
    Route::get('login-reset', 'ShawnSandy\PageKit\Controllers\PagesController@resetLogin');
    Route::any('/send/mail/', 'ShawnSandy\PageKit\Controllers\PageKitController@contactUs');
}
);

Route::group(
    ['prefix' => 'dash'], function () {
    Route::get('', 'ShawnSandy\PageKit\Controllers\DashController@index');
    Route::get('logs', 'ShawnSandy\PageKit\Controllers\DashController@logs');

}
);

Route::group(
    ['prefix' => 'github'], function () {
    Route::get('login', 'ShawnSandy\PageKit\Controllers\GithubLoginController@handleAuth');
    Route::get('auth', 'ShawnSandy\PageKit\Controllers\GithubLoginController@auth');

}
);

Route::resource('md', 'ShawnSandy\PageKit\Controllers\MarkdownController');

Route::get('test-login', function (Request $request) {

    return Carbon::now()->parse('2015-12-20')->diffForHumans();

});
