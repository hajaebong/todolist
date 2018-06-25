<?php

Route::get('/', 'WelcomeController@index');

Route::get('pages/aboutus','pageController@aboutus');
Route::get('pages/location','pageController@location');
Route::get('pages/copyright','pageController@copyright');