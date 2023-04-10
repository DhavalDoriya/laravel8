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
        <a href={{ route('users.create') }}>
            <button type="button" class="btn btn-primary mt-5">
                Add User</button>
        </a>

        <div class="row">
            <div class="col-12">
                {{-- <a href={{ route('usercurd') }}>
                    reload
                </a> --}}
                <br>



                <br>

                @if ($message)
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>{{ $message }}</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                @endif





                <h2>User Data</h2>

                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">No</th> --}}

                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">update</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- {{$i=0;}} --}}
                        @foreach ($users as $user)
                            <tr>
                                {{-- <th >{{++$i}}</th> --}}

                                <th scope="row">{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>


                                <th>
                                    <a href="/update/{{ $user->id }}">
                                        <button type="button" class="btn btn-success mt-1">
                                            update {{ $user->id }}</button>

                                    </a>
                                </th>
                                student.show
                                <th>

                                    <a href="/delete/{{ $user->id }}"
                                        onclick="return confirm('Are you sure you want to delete this item?' );">
                                        <button type="button" class="btn btn-danger mt-1">
                                            Delete {{ $user->id }}</button>
                                    </a>
                                </th>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="mt-5">
                    {{ $users->links() }}
                    {{-- {{ $users->onEachSide(5)->links() }} --}}
                </div>


            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>
