<?php


Route::get('/fuzzyfolks', 'FuzzysController@index');

Route::get('/fuzzyfolks/employee', 'EmployeeController@index');

Route::get('/fuzzyfolks/employee/{id}', 'EmployeeController@person');

Route::get('/fuzzyfolks/department/', 'DepartmentsController@index');

Route::get('/fuzzyfolks/departments/{deptid}/employees', 'DepartmentsController@getDepartmentEmployees');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');
