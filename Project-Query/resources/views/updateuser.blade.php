<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update New User</h1>
                <form action="{{route('update.user', $data->id)}}" method="POST">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name:</label>
                            <input type="text" id="name" value="{{$data->name}}" class="form-control" name="Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email:</label>
                            <input type="email" id="email" value="{{$data->email}}" class="form-control" name="Useremail" required>
                        </div>
                        <div class="mb-3">
                            <label for="city">City:</label>
                            <input type="text" id="city" value="{{$data->city}}" class="form-control" name="Usercity" required>
                        </div>
                        <div class="mb-3">
                            <label for="age">Age:</label>
                            <input type="number" id="age" value="{{$data->age}}" class="form-control" name="Userage" required>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Please recheck all data and confirm once')">Update</button>
                        
                         <a href="{{ url('/') }}" class="btn btn-dark">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>