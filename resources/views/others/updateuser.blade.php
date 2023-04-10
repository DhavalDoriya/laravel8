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

    <div class="container mt-5">

        <div class="row">
            <div class="col-6">
                <a href={{ route('usercurd') }}>
                    reload
                </a>
                <br>
                {{$message ?? ''}}
                <h2>Update User Form</h2>

                <form action="/updateuser/{{$user->id}}" method="post" class="mt-5">
                    @csrf
                    <input type="text" placeholder="name" value={{$user->name}} name="name">
                    <br> <br>
                    <input type="text" placeholder="email" value={{$user->email}} name="email">

                    <br> <br>
                    {{-- <input type="text" placeholder="password" value={{$user->password}} name="email"> --}}

                    <br> <br>
                    <button type="submit" class="btn btn-primary">Update user</button>
                </form>

            </div>



        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>
