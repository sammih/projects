@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="columns justify-content-center">
        <div class="column is-three-fifths">
                <h1 class="title">{{ $project->title }}</h1>
                <div class="notification">
                    {{ $project->description }}
                    <p>
                        <a class="button is-success" href="/projects/{{ $project->id }}/edit">edit</a>
                    </p>

                </div>

                @if($project->tasks->count())
                <h1 class="heading is-1"><strong>Project's Tasks</strong></h1>
                <div class="box">
                        @foreach($project->tasks as $task)
                            <div>
                                <form method="post" action="/completed-tasks/{{ $task->id }}">
                                    @if($task->completed)
                                        @method('DELETE')
                                    @endif

                                    @csrf
                                    <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                        {{ $task->description }}
                                    </label>

                                </form>
                            </div>
                        @endforeach
                    </div>
                @endif

                {{--Add a new task--}}
            <h1 class="heading is-1"> <strong>Add Task to this project</strong></h1>
            <form method="post" action="/projects/{{ $project->id }}/tasks" class="box">
                    @csrf
                    <div class="filed">
                        <label class="label" for="description"></label>
                        <div class="control">
                            <input type="text" class="input" name="description" placeholder="New Task">
                        </div>
                    </div>

                    <div class="field mt-1">
                        <div class="control">
                            <button type="submit" class="button is-link">Add Task</button>
                        </div>
                    </div>
                </form>

                @include('errors')
        </div>
    </div>


@endsection
