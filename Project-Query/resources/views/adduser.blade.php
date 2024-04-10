<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add user form</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
    <div class="background">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="heading">Add New User</h1>
                <form action="" method="POST">
                    <form action="{{route('addUser')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" name="Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" name="Useremail" required>
                        </div>
                        <div class="mb-3">
                            <label for="city">City:</label>
                            <input type="text" id="city" class="form-control" name="Usercity" required>
                        </div>
                        <div class="mb-3">
                            <label for="age">Age:</label>
                            <input type="number" id="age" class="form-control" name="Userage" required>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="return confirm('make sure you like to insert')">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>