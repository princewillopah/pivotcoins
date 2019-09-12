<?php


Route::get('/','Frontend@home')->name('homepage');
Route::get('/about','Frontend@about')->name('about');
Route::get('/marketing','Frontend@marketing')->name('marketing');
Route::get('/contact','Frontend@contact')->name('contact');
Route::get('/referral','Frontend@referral')->name('referral');
Route::get('/investment-plans','Frontend@plans')->name('plans');
Route::get('/terms','Frontend@terms')->name('terms');
Route::get('/faq','Frontend@faq')->name('faq');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/next-of-kin', 'HomeController@profile')->name('profile');

Route::resource('/admin', 'AdminController');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/member/{user_id}/deposits/{deposit_id}', 'AdminController@alldeposite')->name('alldeposite');
// Route::get('/member/{user_id}/deposits', 'AdminController@alldeposite')->name('alldeposite');
Route::resource('/balance', 'BalanceController');
Route::resource('/withdrawal', 'WithdrawalController');
Route::resource('/deposit', 'DepositController');
Route::resource('/next-of-kin', 'NextofkinController');
