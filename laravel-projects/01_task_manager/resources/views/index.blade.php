@extends('layouts.app')
@section('title', 'all tasks')

@section('content')
    @forelse($tasks as $task)
        <p>
            <a href="{{route('tasks.show', ['id' => $task->id])}}">
                {{$task->title}}
            </a>
        </p>
    @empty
        <div>
            <a href="{{route('tasks.show', ['id' => $task->id])}}">
                There are no tasks!
            </a>
        </div>
    @endforelse

@endsection
