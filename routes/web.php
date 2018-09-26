<?php

Auth::routes();

Route::get('language/{locale}', 'LanguageController@setLanguage');

Route::get('/', 'Company\CompanyController@index')->name('companies');

Route::resource('user', 'UserController');
Route::resource('company', 'Company\CompanyController');
Route::resource('company.employee', 'Company\EmployeeController');
//Route::resource('employee', 'EmployeeController');
