<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        To apply the middleware only to the given actions
//        $this->middleware('auth')->only(['store', 'update']);

        //        To apply the middleware to all actions except the specified
        //        $this->middleware('auth')->except(['show', 'index']);

    }

    public function index()
    {
        $now = new Carbon();

    	$projects = Project::where('user_id', auth()->id())->get();
    	return view('index', compact('projects', 'now'));

    }

    public function create()
    {
    	return view('create');

    }

    public function show(Project $project)
    {
//        if ($project->user_id !== auth()->id()) {
//            abort(403);
//        }
//   *     abort_unless(auth()->user()->owns($project), 403);

        abort_if($project->user_id !== auth()->id(),403);

        return view('show', compact('project'));

    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:8']
        ]);

        $attributes['user_id'] = auth()->id();

        Project::create($attributes);

    	return redirect('/projects');

    }

    public function edit(Project $project)
    {

    	return view ('edit', compact('project'));

    }

    public function update(Project $project)
    {

        $project->update(request(['title', 'description']));

        return redirect('/projects');

    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');

    }
}
