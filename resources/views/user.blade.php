<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>check vaccine status</title>
</head>

<body>
    <div class="container">
        <h1>check vaccine status</h1>

    <?php
    session_start();
    session(['age' => $age]);
    ?>
    <br>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">occupation</th>
                <th scope="col">check</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$fname}}</th>
                <td>{{$lname}}</td>
                <td>{{$email}}</td>
                <td>{{$age}}</td>
                <td>developer</td>
                
                <td> <a href="{{ route('vaccine')}}">
                        <button type="button" class="btn btn-primary">check vaccine status
                        </button></a></td>
            </tr>
        </tbody>
    </table>
  
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>