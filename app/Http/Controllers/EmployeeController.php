<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function view()
    {
        return view('add_employee');
    }
    public function store(Request $request)
    {
        $request->validate([
            'ename' => 'required|max:500',
            'address' => 'required|max:500',
            'salary' => 'required|integer|min:1'
        ]);

        $employee = new Employee();
        $employee->ename = $request->ename;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect('/');
    }
}
