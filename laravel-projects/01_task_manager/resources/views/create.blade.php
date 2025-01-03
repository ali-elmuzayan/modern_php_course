@extends('layouts.app')

@section('title', 'add task')

@section('content')
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="desc">Description</label>
        <textarea name="description" id="desc" cols="30" rows="10"></textarea>
        <br>
        <label for="long_desc">Long Description</label>
        <textarea name="long_description" id="long_desc" cols="30" rows="10"></textarea>
        <input type="submit" value="submit">
    </form>
@endsection
