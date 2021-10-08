<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getData()
    {
        $employees = Employee::paginate(50);
        return view('home', compact('employees'));
    }

    public function setData()
    {
        $employees = Employee::paginate(50);
        return view('home', compact('employees'));
    }
}
