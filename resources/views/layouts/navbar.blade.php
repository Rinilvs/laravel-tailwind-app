<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div>
                <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800">To-Do List</a>
            </div>
            <div>
                <a href="{{ route('tasks.index') }}" class="text-gray-800 mx-2">Home</a>
                <a href="{{ route('tasks.create') }}" class="text-gray-800 mx-2">Add Task</a>
            </div>
        </div>
    </div>
</nav>
