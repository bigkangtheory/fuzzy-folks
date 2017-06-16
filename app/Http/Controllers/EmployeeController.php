<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Employee;

class EmployeeController extends Controller
{
    //
	public function index()
	{
		$employees = Employee::get();
  	//return view('employees.employee', compact('employees'));
		return $employees;
	}

	public function person($id)

	{
		$employee = Employee::where('id', $id)->get();
		 //return $id;
  	//return view('employees.person', compact('id'));
		return new JsonResponse($employee, 200);
	}
}
