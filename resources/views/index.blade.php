@extends('layout')

@section('title', 'Home')

@section('content')

	@foreach($projects as $project)
        <div class="columns justify-content-center">
            <div class="column is-one-fifth">
                <div class="box">
                    <div class="card" style="width: 195px; height: auto">
                        <div class="card-image">
                            <figure class="image is-2-desktop">
                                <img src="{{ asset('svg/503.svg') }}" alt="Project">
                            </figure>
                        </div>
                        <div class="card-content">

                            <div class="content">
                                <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                                <br>
                                <time datetime="2016-1-1"><strong>Date</strong>: {{ $project->updated_at }}</time>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="column column is-half">
                <article class="message is-primary">
                    <div class="message-header">
                        <a class="title" href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                    </div>
                    <div class="message-body">
                        {{ $project->description }}
                    </div>
                </article>

                {{--<p class="notification">--}}
                {{--</p>--}}
                <a class="is-pulled-right button is-small is-primary" href="/projects/{{ $project->id }}" style="margin-top: -15px">
                    View
                </a>
            </div>
        </div>
    @endforeach
@endsection
