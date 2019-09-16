<?php


Route::get('/','Frontend@home')->name('homepage');
Route::get('/about','Frontend@about')->name('about');
Route::get('/marketing','Frontend@marketing')->name('marketing');
Route::get('/contact','Frontend@contact')->name('contact');
Route::get('/referral','Frontend@referral')->name('referral');
Route::get('/investment-plans','Frontend@plans')->name('plans');
Route::get('/terms','Frontend@terms')->name('terms');
Route::get('/faq','Frontend@faq')->name('faq');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/next-of-kin', 'HomeController@profile')->name('profile');


Route::resource('/balance', 'BalanceController');
Route::resource('/withdrawal', 'WithdrawalController');
Route::resource('/deposit', 'DepositController');
Route::resource('/next-of-kin', 'NextofkinController');
Route::get('/dashboard', 'UsersController@dashboard')->name('dashboard');
// Route::get('/member/{user_id}/deposits', 'UsersController@alldeposite')->name('alldeposite');
Route::get('/profile', 'MembersController@profile')->name('profile');
Route::get('/profile/edit', 'MembersController@profileEdit')->name('profileEdit');
Route::put('/profile/store', 'MembersController@profileStore')->name('profileStore');
Route::resource('/members', 'UsersController');

Route::get('/members/{userid}/deposit', 'UsersController@member_deposit_index')->name('member.deposit.index');
Route::post('/members/{userid}/store', 'UsersController@member_deposit_store')->name('member.deposit.store');
Route::put('/members/{userid}/deposit/{depositid}/update', 'UsersController@member_deposit_update')->name('member.deposit.update');
Route::delete('/members/{userid}/deposit/{depositid}/delete', 'UsersController@member_deposit_destroy')->name('member.deposit.destroy');
// Route::resource('/user.deposits', 'UsersController');






