<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects = Project::all();
    	return view('index', compact('projects'));

    }

    public function create()
    {
    	return view('create');

    }

    public function show(Project $project)
    {

        return view('show', compact('project'));

    }

    public function store()
    {
        Project::create(request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:8']
        ]));

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
