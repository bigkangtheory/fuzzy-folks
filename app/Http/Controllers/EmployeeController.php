<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //
	public function index()
	{
		$employees = Employee::current();

  	return view('employees.employee', compact('employees'));
	}


	public function person(Employee $id)

	{
		// $employee = Employee::find($id);
		 //return $id;

  	return view('employees.person', compact('id'));
	}
}
