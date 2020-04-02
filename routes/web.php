<?php

//Главная страница

Route::get('/', 'CommentController@indexComments')->name('home');

//Регистрация

Route::get('/signup', 'AuthController@getSignup')->name('auth.signup');
Route::post('/signup', 'AuthController@postSignup');

// Авторизация

Route::get('/signin', 'AuthController@getSignin')->name('auth.signin');
Route::post('/signin', 'AuthController@postSignin');

// Разлогинивание

Route::get('/signout', 'AuthController@getSignout')->name('auth.signout');

Route::post('/', 'CommentController@addComment')->name('comments.add');




