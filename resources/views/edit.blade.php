@extends('layout')

@section('title', 'Edit')

@section('content')
    <div class="columns justify-content-center">
        <div class="column is-three-fifths">

            <div class="card">
                <header class="card-header">
                    <p class="card-header-title has-text-primary">
                        <span class="has-text-black highlight">Edit project</span>: {{ $project->title }}
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                      <span class="icon">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        <form action="/projects/{{ $project->id }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="label" for="title">Project's title</label>
                                <input type="text" class="form-control" name="title" value="{{ $project->title }}" id="title">
                            </div>
                            <div class="form-group">
                                <label class="label" for="description">Description</label>
                                <textarea class="form-control" name="description" id="description">{{ $project->description }}</textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="column">
                        <form action="/projects/{{ $project->id }}" method="post">
                            @method('PATCH')
                            @csrf
                            <button class="button is-small is-primary">Update</button>
                        </form>
                    </div>
                    <div class="column">
                        <form action="/projects/{{ $project->id }}" method="post" class="mt-2">
                            @method('DELETE')
                            @csrf
                            <button class="button is-small is-pulled-right is-danger">Delete</button>
                        </form>
                    </div>
                </footer>
            </div>
        </div>
    </div>

@endsection
