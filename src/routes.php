<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/16
 * Time: 10:02 AM
 *
 */

Route::group(['prefix' => 'page', 'middleware' => ['web']], function () {
    Route::get('', 'ShawnSandy\PageKit\Controllers\PagesController@index');
    Route::get('{name}', 'ShawnSandy\PageKit\Controllers\PagesController@page');
    Route::get('login-reset', 'ShawnSandy\PageKit\Controllers\PagesController@resetLogin');
    Route::post('/send/mail/', 'ShawnSandy\PageKit\Controllers\PageKitController@contactUs');

});

Route::group(['prefix' => 'dash', 'middleware' => 'web'], function () {
    Route::get('', 'ShawnSandy\PageKit\Controllers\PagesController@admin');
    Route::get('{name}', 'ShawnSandy\PageKit\Controllers\PagesController@admin');
});

Route::group(['prefix' => 'post'], function () {

    Route::get('{posts}', 'ShawnSandy\PageKit\Controllers\PostsController@index');

});
