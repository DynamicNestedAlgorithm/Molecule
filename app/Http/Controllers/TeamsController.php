<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = "LabCoder";
        $labcoders = User::where('user_type', $type)->orderBy('name', 'desc')->paginate(10);
        $teams = Team::orderBy('name', 'desc')->paginate(10);
        return view('dashboard.teams.index', compact('teams','labcoders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = "LabCoder";
        $labcoders = User::where('user_type', $type)->orderBy('name', 'desc')->paginate(10);
        return view('dashboard.teams.create', compact('teams','labcoders'));
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
            'lead'   => 'required',
            'frontend'   => 'required',
            'backend'   => 'required',
            'designer'   => 'required',
            'member1'   => '',
            'member2'   => '',
        ]);
       
      $name = $request->input('name'); 
      $description = $request->input('description'); 
      $lead = $request->input('language'); 
      $frontend = $request->input('deadline'); 
      $backend = $request->input('backend');    
      $designer = $request->input('designer');    
      $member1 = $request->input('member1');    
      $member2 = $request->input('member2');    
        
      team::updateOrCreate([
          'name' => $name,
          'description' => $description,
          'lead'   => $lead,
          'frontend'   => $frontend,
          'backend'   => $backend,
          'designer'   => $designer,
          'member1'   => $member1,
          'member2'   => $member2
         ]);

        return redirect('/teams')->with('Awesome!, Team Created! :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $team = team::find($id);
        return view('dashboard.teams.single')->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = team::find($id);
        return view('dashboard.teams.edit')->with('team', $team);
    
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
        $name = $request->input('name'); 
        $description = $request->input('description'); 
        $lead = $request->input('language'); 
        $frontend = $request->input('deadline'); 
        $backend = $request->input('backend');    
        $designer = $request->input('designer');    
        $member1 = $request->input('member1');    
        $member2 = $request->input('member2');    
          
        team::updateOrCreate([
            'name' => $name,
            'description' => $description,
            'lead'   => $lead,
            'frontend'   => $frontend,
            'backend'   => $backend,
            'designer'   => $designer,
            'member1'   => $member1,
            'member2'   => $member2
           ]);
  
          return redirect('/teams')->with('Awesome!, Team Updated! :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $team = Team::find($id);
        $team->delete();
        return redirect('/teams')->with('success','Whohoo! Team Deleted, Now Lets Add More ;)');
    
    }
}
