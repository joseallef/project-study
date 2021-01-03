<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'App\Http\Controllers\CourseController@listAll')->name('list.course');

Route::get('admin/create', 'App\Http\Controllers\CourseController@create')->name('course.create');

Route::get('admin/edit/{course}', 'App\Http\Controllers\CourseController@edit')->name('course.edit');

Route::put('admin/alter/{course}', 'App\Http\Controllers\CourseController@alter')->name('course.alter');


Route::post('admin/save', 'App\Http\Controllers\CourseController@save')->name('course.save');

Route::delete('admin/delete/{course}', 'App\Http\Controllers\CourseController@delete')->name('course.delete');
