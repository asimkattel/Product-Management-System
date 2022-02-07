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

        return redirect('/list_employee');
    }
    public function edit($id)
    {
        $employee = Employee::where(['id' => $id])->first();
        return view('edit_employee', [
            'employee' => $employee
        ]);
    }
    public function editstore(Request $request, $id)

    {
        $request->validate([
            'ename' => 'required|string|max:500',
            'address' => 'required|min:0',
            'salary' => 'required'
        ]);
        $employee=Employee::where(['id' => $id])->first();
        $employee->ename = $request->ename;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect('/list_employee');
 
    }
    public function show(Request $request)
    {
        $page = $request->query('page');
        if ($page == null) $page = 1;

        $page = ($page - 1) * 5 + 1;
        $data = Employee::paginate(5);
        return view('list_employee', [
            "data" => $data,
            'page' => $page
        ]);
    }
    public function destroy(Request $request, $id)
    {
        $employee = Employee::where(['id' => $id])->first();
        $employee->delete();
        return redirect('/list_employee');
    }
}
