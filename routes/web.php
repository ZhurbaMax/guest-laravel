<?php

Route::get('/', 'CommentController@indexComments')->name('home');


// Авторизация

Route::get('/signup', 'AuthController@getSignup')->name('auth.signup');

Route::post('/signup', 'AuthController@postSignup');



