<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getData()
    {
        $employeeData = Employee::all();
        return view('home', compact('employeeData'));
    }
}
