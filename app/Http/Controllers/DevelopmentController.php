<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class DevelopmentController extends Controller
{
    //
    public function index(){

        $projects = Project::orderBy('name', 'desc')->paginate(10);
        return view('dashboard.projects.development', compact('projects'));

    }
}
