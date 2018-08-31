<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('name', 'desc')->paginate(10);
        return view('dashboard.projects.index', compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $projects = Project::orderBy('name', 'desc')->paginate(10);
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description'  => 'required',
            'file'   => 'required',
            'language'   => 'required',
            'deadline'   => 'required',
        ]);
       
   
      $name = $request->input('name'); 
      $description = $request->input('description'); 
      $language = $request->input('language'); 
      $deadline = $request->input('deadline'); 
      $status = 'Specification Analysis';    
      $file = $request->file('file')->store('public/files');
        
      Project::updateOrCreate([
          'name' => $name,
          'file' => $file,
          'description' => $description,
          'status'   => $status,
          'language'   => $language,
          'deadline'   => $deadline
      ]);
        return redirect('/projects')->with('Awesome!, Project Created! :)');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $project = Project::find($id);
        return view('projects.single')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('project', $project);
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
       //Update meeting room 
       $project = Project::find($id);
       $project ->name = $request->input('name');
       $project ->description  = $request->input('description');
       $project ->capacity  = $request->input('capacity');
       $project ->save();

       return redirect('/projects')->with('success', 'Great Job!, Meeting Room Updated! :)');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects')->with('success','Whohoo! Meeting Room Deleted, Now Lets Add More ;)');
    
    }
}
