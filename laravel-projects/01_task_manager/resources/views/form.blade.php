@extends('layouts.app')

@section('title', isset($task) ?'edit task' : 'Add Task')

@section('content')
    <form action="{{isset($task) ?route('tasks.update', $task->id) : route('tasks.create')}}" method="post">
        @csrf
        @isset($task)
            @method('put')
        @endisset
        <div class="mb-4">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title"
                   @class(['border-red-500' => $errors->has('title')])
                   value="{{$task->title ?? old('title')}}">
            @error('title') <span class="error">{{$message}}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="desc">Description</label>
            <textarea name="description" id="desc" cols="30"
                      @class(['border-red-500' => $errors->has('description')])
                      rows="10">{{$task->description ?? old('description')}}</textarea>
            @error('description') <span class="error">{{$message}}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="long_desc">Long Description</label>
            <textarea name="long_description" id="long_desc" cols="30"
                      @class(['border-red-500' => $errors->has('long_description')])
                      rows="10">{{$task->long_description ?? old('long_description')}}</textarea>
            @error('long_description') <span class="error">{{$message}}</span> @enderror
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
            <a href="{{route('tasks.index')}}" class="link">Cancel</a>
        </div>
    </form>
@endsection
