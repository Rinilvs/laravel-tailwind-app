<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('layouts.navbar')
    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
</html>
