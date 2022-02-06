<?php

namespace App\Http\Controllers;

use App\Models\Project;

class IndexController extends Controller
{
    public function index()
    {
        //asdjhaskdjhakj

        $data = Project::paginate(5);

        //
        return view('welcome', [
            "data" => $data
        ]);
    }
}
