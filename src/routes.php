<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/16
 * Time: 10:02 AM
 *
 */


Route::group(['middleware' => 'web'], function(){

    Route::group(['prefix' => 'page'], function () {
        Route::get('', 'ShawnSandy\PageKit\Controllers\PagesController@index');
        Route::get('{name}', 'ShawnSandy\PageKit\Controllers\PagesController@page');
        Route::get('login-reset', 'ShawnSandy\PageKit\Controllers\PagesController@resetLogin');
        Route::post('/send/mail/', 'ShawnSandy\PageKit\Controllers\PageKitController@contactUs');
    });

    Route::group(['prefix' => 'dash'], function () {
        Route::get('', 'ShawnSandy\PageKit\Controllers\PagesController@admin');
        Route::get('{name}', 'ShawnSandy\PageKit\Controllers\PagesController@admin');
    });

    Route::group(['prefix' => 'github'], function(){
        Route::get('login', 'ShawnSandy\PageKit\Controllers\GithubLoginController@handleAuth');
        Route::get('auth', 'ShawnSandy\PageKit\Controllers\GithubLoginController@auth');

    });

    Route::resource('md', 'ShawnSandy\PageKit\Controllers\MarkdownController');

});
