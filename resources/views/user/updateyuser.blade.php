<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update!</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        svg {
            height: 15px;
            width: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{route('user.index')}}">
            <button  class="btn btn-success mt-1"> back</button>
        </a>
        <div class="container mt-5">
            <h1>upate record</h1>

            <form action={{ route('user.update', ['user' => $user->id]) }} method='POST'>
                @csrf
                @method('PUT')
                <label for="name">name:</label><br>
                <input class="form-control" type="text" value="{{ $user->name }}" name="name"><br>
                <label> roll_no</label>
                <input class="form-control" type="number" value={{ $user->roll_no }} name="roll_no"><br>
                <label> std</label>
                <input class="form-control" type="number" value={{ $user->std }} name="std"><br>

                <label> dob</label>
                <input class="form-control" type="date" value={{ $user->dob }} name="dob"><br>


                <label>phone_number</label>
                <input class="form-control" type="tel" value={{ $user->phone_number }}
                    name="phone_number"><br>


                <label> section_id</label>
                <input class="form-control" type="number" value={{ $user->section_id }} name="section_id"><br>

                <label> sec_id</label>
                <input class="form-control" type="number" value={{ $user->sec_id }} name="sec_id"><br>

                <label> email</label>
                <input class="form-control" type="email" value={{ $user->email }} name="email"><br>

                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
