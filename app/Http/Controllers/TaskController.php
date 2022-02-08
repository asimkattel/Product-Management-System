<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $page = $request->query('page');
        if ($page == null) $page = 1;
        $page = ($page - 1) * 5 + 1;


        $data = Task::join("employees", "tasks.employee_id", "=", "employees.id")
            ->join("projects", "tasks.project_id", "=", "projects.id")
            ->select("employees.ename", "projects.name", "tasks.date", "employees.salary")
            ->get();

        return view('list_task', [
            'data' => $data,
            'page' => $page
        ]);
    }

    public function view()

    {
        $data = Employee::all();
        $projects = Project::all();
        return view('add_task', [
            'data' => $data,
            'projects' => $projects
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'eid' => 'required',
            'pid' => 'required',
            'date' => 'required'
        ]);
        //saving in db
        $task = new Task();
        $task->employee_id = $request->eid;
        $task->project_id = $request->pid;
        $task->date = $request->date;
        $task->save();

        return redirect('/list_task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
