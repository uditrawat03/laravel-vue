<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function store(Request $request){
        Project::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
    }
}
