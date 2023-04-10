<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
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



        <a href={{ route('users.index') }}>
            <button type="button" class="btn btn-primary mt-5">
                <-- Back</button></a>
        <br>

        <div class="container mt-5">
            <h2>User Form</h2>

            <form action="/update/{{ $user->id }}" method="post" class="mt-5">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="name" name="name" class="form-control" value={{ $user->name }} name="name">
                    <br> <br>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" value={{ $user->email }}
                        id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" value={{ $user->password }}
                        id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
