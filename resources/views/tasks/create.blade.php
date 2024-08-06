@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Add Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title:</label>
            <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description:</label>
            <textarea name="description" id="description" class="w-full px-4 py-2 border rounded"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Task</button>
    </form>
</div>
@endsection