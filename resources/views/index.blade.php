@extends('layout')

@section('title', 'Home')

@section('content')

	@foreach($projects as $project)
    <div class="columns justify-content-center">
        <article class="media">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="{{ asset('img/project.png') }}">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>{{ $project->title }}</strong>
                <br>
                {{ $project->description }}
                <br>
                <small><a>Like</a> · <a href="/projects/{{ $project->id }}">View</a> · <code>{{ $project->updated_at }}</code></small>
              </p>
            </div>
        </article>
    </div>
    @endforeach
@endsection
