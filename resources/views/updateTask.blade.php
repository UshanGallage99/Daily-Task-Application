<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h3>Update Task</h3>
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors -> all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach

                    <form action="/update" method="post">
                        {{csrf_field()}}

                        <input type="hidden" class="form-control" name="id" value="{{$taskdata->id}}">
                        <br>
                        <input type="text" class="form-control" name="task" value="{{$taskdata->task}}">
                        <br>
                        <input type="submit" class="btn btn-warning" value="Update">
                        <a href="/cancelUpdate" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>