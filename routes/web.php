<?php



Route::get('/', 'PagesController@accueil')->name('accueil_path');

Route::get('/contact', 'PagesController@Contact')->name('contact_path');
