<?php

Route::get('/',[
    'uses' => 'BigStoreController@index',
    'as'   => '/'
]);

Route::get('/contact-us',[
    'uses' => 'BigStoreController@contactUs',
    'as'   => 'contact'
]);
Route::get('/personal-care',[
    'uses' => 'BigStoreController@hairCare',
    'as'   => 'hair-care'
]);
Route::get('/hair-care',[
    'uses' => 'BigStoreController@naturalCream',
    'as'   => 'single'
]);

