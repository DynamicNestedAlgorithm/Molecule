<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('name', 'desc')->paginate(8);
        return view('dashboard.dashboard')
        ->with('projects', $projects)
        ->with('projects_count', Project::all());

        // @see: https://bitbucket.org/account/user/<username or team>/api
  $oauth_params = array(
    'client_id'         => 'aaa',
    'client_secret'     => 'bbb'
);

$bitbucket = new \Bitbucket\API\Api();
$bitbucket->getClient()->addListener(
    new \Bitbucket\API\Http\Listener\OAuth2Listener($oauth_params)
);

$repositories = $bitbucket->api('Repositories');
$response     = $repositories->all('my_account'); // should include private repositories
    }
}
