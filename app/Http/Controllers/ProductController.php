<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function view()
    {
        return view('add');
    }
    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required|max:500',
            'cost' => 'required|integer|min:0',
            'duration' => 'required|integer|min:1'
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->cost = $request->cost;
        $project->duration = $request->duration;
        $project->save();

        return redirect('/');
    }
    public function edit($id)
    {
        $project = Project::where(['id' => $id])->first();
        return view('edit', [
            'project' => $project
        ]);
    }
    public function editstore(Request $request, $id)

    {
        $request->validate([
            'name' => 'required|max:500',
            'cost' => 'required|integer|min:0',
            'duration' => 'required'
        ]);
        $project=Project::where(['id' => $id])->first();
        $project->name = $request->name;
        $project->cost = $request->cost;
        $project->duration = $request->duration;
        $project->save();

        return redirect('/');
 
    }
    public function destroy(Request $request, $id)
    {
        $project=Project::where(['id' => $id])->first();
        $project->delete();
        return redirect('/');
    }
}
