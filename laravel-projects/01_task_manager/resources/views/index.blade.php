@extends('layouts.app')
@section('title', 'all tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{route('tasks.create')}}"
           class="link">Add Task</a>
    </nav>
    @forelse($tasks as $task)
        <p>
            <a href="{{route('tasks.show', $task->id)}}"
                    @class(['line-through' => $task->completed])>
                {{$task->title}}
            </a>
        </p>
    @empty
        <div>
            <a href="{{route('tasks.show', ['task' => $task->id])}}">
                There are no tasks!
            </a>
        </div>
    @endforelse
    <nav class="mt-4">
        {{$tasks->links()}}
    </nav>

@endsection
