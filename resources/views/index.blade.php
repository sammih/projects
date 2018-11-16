@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="column">
        <div class="field has-addons is-pulled-right">
            <div class="control">
                <input id="myTextInput" class="input is-small is-rounded" type="text" placeholder="Enter your color">
            </div>
            <div class="control">
                <a id="changeBgColor" class="button is-primary is-small is-rounded">
                    Change text color
                </a>
            </div>
        </div>
    </div>

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
                        <strong id="title">{{ $project->title }}</strong> by: <small>{{ Auth::user()->name }}</small>
                        <br>
                        {{ $project->description }}
                    </p>
                </div>
                <nav class="level is-mobile">
                    <div class="level-left">
                        <a href="" class="level-item">
                            <span><code>{{ $project->updated_at }}</code></span>
                        </a>
                        <small>
                            <a href="/projects/{{ $project->id }}" class="level-item button is-small is-primary is-outlined is-rounded">
                                <span>View</span>
                            </a>
                        </small>

                    </div>
                </nav>
            </div>
            <div class="media-right">
                <button class="delete"></button>
            </div>
        </article>
    </div>
    @endforeach
@endsection
