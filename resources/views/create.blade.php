@extends('layout')

@section('title', 'Create')

@section('content')
    <div class="columns justify-content-center">
        <div class="column is-half ">
            <h1 class="title">Create project</h1>
            <div class="box">
                <form action="/projects" method="post">
                    @csrf
                    <div class="field">
                        <label class="label" for="title">Project's title</label>
                        <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" required name="title" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label class="label" for="description">Description</label>
                        <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                    <button type="submit" class="button is-link">Add Project</button>
                    @include('errors')
                </form>
            </div>
        </div>
    </div>


@endsection
