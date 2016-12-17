<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



    /** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
    Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        /**
         * Pages router
         */
        Route::get('/', 'PagesController@GetHomePage');
        Route::get('/publications', 'PagesController@GetPubliationsPage');
        Route::get('/about', 'PagesController@GetAboutPage');
        Route::get('/contact', 'PagesController@GetContactPage');






    });
