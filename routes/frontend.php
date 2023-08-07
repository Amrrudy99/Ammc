<?php

use Illuminate\Support\Facades\Route;



// {{route('frontend.about')}}
// {{route('frontend.aboutfounder')}}
// {{route('frontend.law-service')}}
// {{route('frontend.art-service')}}
// {{route('frontend.consult-service')}}
// {{route('frontend.various-service')}}
// {{route('frontend.gallery')}}
// {{route('frontend.news')}}



Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('about', 'AboutController@index')->name('about');
    Route::get('about-founder', 'AboutFounderController@index')->name('aboutfounder');
    Route::get('law-service', 'LawServiceController@index')->name('law-service');
    Route::get('art-service', 'ArtServiceController@index')->name('art-service');
    Route::get('consult-service', 'ConsultServiceController@index')->name('consult-service');
    Route::get('various-service', 'VariousServiceController@index')->name('various-service');
    Route::get('gallary', 'GallaryController@index')->name('gallary');
    Route::get('news', 'NewsController@index')->name('news');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact','ContactController@store')->name('contact.store');
});
