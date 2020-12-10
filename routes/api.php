<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Mentor
Route::get('mentors', 'MentorController@index');
Route::get('mentors/{id}', 'MentorController@show');
Route::post('mentors', 'MentorController@create');
Route::put('mentors/{id}', 'MentorController@update');
Route::delete('mentors/{id}', 'MentorController@destroy');


// Course
Route::get('courses', 'CourseController@index');
Route::get('courses/{id}', 'CourseController@show');
Route::post('courses', 'CourseController@create');
Route::put('courses/{id}', 'CourseController@update');
Route::delete('courses/{id}', 'CourseController@destroy');

// Chapter
Route::get('chapters', 'ChapterController@index');
Route::get('chapters/{id}', 'ChapterController@show');
Route::post('chapters', 'ChapterController@create');
Route::put('chapters/{id}', 'ChapterController@update');
Route::delete('chapters/{id}', 'ChapterController@destroy');

// Lessons
Route::get('lessons', 'LessonController@index');
Route::get('lessons/{id}', 'LessonController@show');
Route::post('lessons', 'LessonController@create');
Route::put('lessons/{id}', 'LessonController@update');
Route::delete('lessons/{id}', 'LessonController@destroy');

// image course
Route::post('image-courses', 'ImageCourseController@create');
Route::delete('image-courses/{id}', 'ImageCourseController@destroy');

// my course
Route::post('my-courses', 'MyCourseController@create');
Route::post('my-courses/premium', 'MyCourseController@createPremiumAccess');
Route::get('my-courses', 'MyCourseController@index');

// Reviews
Route::post('reviews', 'ReviewController@create');
Route::put('reviews/{id}', 'ReviewController@update');
Route::delete('reviews/{id}', 'ReviewController@destroy');

