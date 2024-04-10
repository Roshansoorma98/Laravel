<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <div class="conatainer">
        <div class="row">
            <div class="col-6">
                <h1>Here is the data that you want to delete from your users table</h1>
                <table class="table table-bordered table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Age</th>
                      </tr>
    
                      @foreach ($data as $user )
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->age}}</td>   
                      </tr>
                    @endforeach
    
                </table>
    
    
            </div>
        </div>
    </div>
    
    
</body>
</html>

<td><a href="{{ route('delete.user1',$user->id) }}" class="btn btn-danger" 
    onclick="return confirm('Are you sure?')">delete</a></td>

<a href="{{ url('/') }}" class="btn btn-primary">Back</a>
