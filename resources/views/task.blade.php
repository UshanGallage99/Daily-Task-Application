<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Task App</h1>
            <div class="row">
                <div class="col-md-12">

                    @foreach($errors -> all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach

                    <form method="post" action="/saveTask">
                    {{csrf_field()}}

                    <input type="text" class="form-control" name="task" placeholder="Enter Your Task">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Save">
                    <a href="/cancelUpdate" class="btn btn-warning">Clear</a>
                    </form>
                   <br>
                   <br>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <th>Action</th>
                        <th>Delete</th>
                        <th>Update</th>
                        @foreach($task as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                            @if($task->isCompleted)
                            <button class="btn btn-success">Completed</button>
                            @else
                            <button class="btn btn-warning">Not Completed</button>
                            @endif
                            </td>
                            <td>
                            @if($task->isCompleted)
                            <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-warning">Mark As Not Completed</a>
                            @else
                            <a href="/markascompleted/{{$task->id}}" class="btn btn-success">Mark As Completed</a>
                            @endif
                            </td>
                            <td>
                                <a href="/deleteTask/{{$task->id}}" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="/updateTask/{{$task->id}}" class="btn btn-info">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>