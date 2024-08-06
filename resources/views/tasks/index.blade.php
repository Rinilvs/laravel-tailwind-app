<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold -mt-6 mb-3">Task List</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create Task</a>

        <!-- Container for tasks that are not completed -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Incomplete Tasks</h2>
            <table class="min-w-full border-collapse border border-black">
                <thead>
                    <tr>
                        <th class="py-2 border border-black">Title</th>
                        <th class="py-2 border border-black">Description</th>
                        <th class="py-2 border border-black">Completed</th>
                        <th class="py-2 border border-black">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notCompletedTasks as $task)
                    <tr>
                        <td class="p-2 border border-black">{{ $task->title }}</td>
                        <td class="p-2 border border-black">{{ $task->description }}</td>
                        <td class="p-2 border border-black text-center">
                            <form action="{{ route('tasks.updateStatus', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            </form>
                        </td>
                        <td class="py-2 border border-black text-center">
                            <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 my-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Container for tasks that are completed -->
        <div>
            <h2 class="text-2xl font-bold mb-4">Completed Tasks</h2>
            <table class="min-w-full border-collapse border border-black">
                <thead>
                    <tr>
                        <th class="py-2 border border-black">Title</th>
                        <th class="py-2 border border-black">Description</th>
                        <th class="py-2 border border-black">Completed</th>
                        <th class="py-2 border border-black">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($completedTasks as $task)
                    <tr>
                        <td class="p-2 border border-black">{{ $task->title }}</td>
                        <td class="p-2 border border-black">{{ $task->description }}</td>
                        <td class="p-2 border border-black text-center">
                            <form action="{{ route('tasks.updateStatus', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            </form>
                        </td>
                        <td class="py-2 border border-black text-center">
                            <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 my-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
