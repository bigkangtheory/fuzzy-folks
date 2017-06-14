<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Department;

class DepartmentsController extends Controller
{
    public function index()
    {
      $departments = Department::get();
      return view('department.departmentlist', compact('departments'));
    }

    // public function find()
    // {
    //   $web = Department::find($str);
    //   return view('department.weblist', compact('web'));
    // }

    public function getDepartmentEmployees($deptid)
    {
      $entities = Department::findOrFail($deptid)->employees;
      //collection
      return new JsonResponse($entities, 200);
    }
}
