<?php


Route::get('/employee', 'EmployeeController@index');

Route::get('/employee/{id}', 'EmployeeController@person');

Route::get('/', 'PostsController@index');
// Controller = PostsController
// Eloquent model => Post
// migration => create_posts_table
