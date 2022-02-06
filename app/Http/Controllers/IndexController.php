<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        //asdjhaskdjhakj
        $page = $request->query('page');
        if($page==null) $page=1;
        
        $page=($page-1)*5+1;
       

        

        $data = Project::paginate(5);

        //
        return view('welcome', [
            "data" => $data, 
            'page'=>$page
        ]);
    }
}
