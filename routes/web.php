<?php


Route::get('/fuzzyfolks', 'FuzzysController@index');

Route::get('/fuzzyfolks/employee', 'EmployeeController@index');

Route::get('/fuzzyfolks/employee/{id}', 'EmployeeController@person');

Route::get('/fuzzyfolks/department/', 'DepartmentsController@index');

Route::get('/fuzzyfolks/departments/{deptid}/employees', 'DepartmentsController@getDepartmentEmployees');

Route::get('/', 'PostsController@index');
// Controller = PostsController
// Eloquent model => Post
// migration => create_posts_table

Route::get('/posts/{post}', 'PostsController@show');
