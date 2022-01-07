<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task - List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">
        <div>
            <h1 class="mb-5 text-center">Todo list</h1>
        </div>
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        <div class="mb-5 d-flex justify-content-between mr-5">
          <h1>Number of Task: {{$task_cnt}}</h1>
            {{-- <a class="btn btn-primary" href="{{route('task.create')}}">Add Task</a> --}}
            <a class="btn btn-primary" href="{{route('task.create')}}">Add Task</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Task</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date and Time</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->task }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->date }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                            <form action="{{ route('task.delete', $task->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>

                            <a href = "{{route('task.edit',$task->id)}}"class="btn btn-success">Edit</a>
                        </div>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
