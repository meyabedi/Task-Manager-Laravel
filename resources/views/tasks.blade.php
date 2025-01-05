<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Task Manager</h1>

        <!-- Task Form -->
        <form action="/tasks" method="POST" class="mb-4">
            @csrf
            <div class="input-group">
                <input type="text" name="title" class="form-control" placeholder="Enter a new task">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
        </form>

        <!-- Task List -->
        <ul class="list-group">
            @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{ $task->title }}</span>
                <div>
                    <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
