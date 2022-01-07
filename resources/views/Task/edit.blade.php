<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task - Update</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-secondary p-5 mt-5">
        <div>
            <h1 class = "text-center">Update Task</h1>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6">
                <form action = "{{route('task.update',$task->id)}}" method = "post">
                  @method('PUT')
                  @csrf
                    <div class="form-group">
                      <label for="Task">Task</label>
                      <input type="text" class="form-control" name = "task" value="{{$task->task}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input type="text" class="form-control" name = "description" value="{{$task->description}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="date" class="form-control"  name = "date" value="{{$task->date}}">
                      </div>
                      <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-4">Submit</button>
                    <a href = "{{route('task.index')}}"class="btn btn-danger" href="">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    
    </div>
    
</body>
</html>