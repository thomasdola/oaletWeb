<?php

/*--- General Pages Routes*/
get('/', ['as'=>'welcome', 'uses'=>'PagesController@welcome']);
get('/features', ['as'=>'features', 'uses'=>'PagesController@featuresPage']);
get('/contact', ['as'=>'contact', 'uses'=>'PagesController@contactPage']);
get('/about', ['as'=>'about', 'uses'=>'PagesController@aboutPage']);
get('/pricing', ['as'=>'pricing', 'uses'=>'PagesController@pricingPage']);

/*--- Auth Routes ---*/
get('/auth/sign-up', ['as'=>'getRegister', 'uses'=>'AppAuthController@getRegister']);
get('/auth/sign-in', ['as'=>'getLogin', 'uses'=>'AppAuthController@getLogin']);

/*--- User Dashboard Routes ---*/
Route::group(['prefix'=>'dashboard'], function()
{
    get('/', ['as'=>'user-dashboard', 'uses'=>'UserDashboardController@index']);
});