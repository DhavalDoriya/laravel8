
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

        <a href={{ route('allroute') }}>
            <button type="button" class="btn btn-primary mt-5">
                Back</button>
        </a>


        <a href={{ route('user.create') }}>
            <button type="button" class="btn btn-primary mt-5">
                Add User</button>
        </a>

 

        <div class="row">
            <div class="col-12">


                <h2>User Data</h2>

                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">No</th> --}}
                            <th scope="col">ID</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            {{-- <th scope="col">first_name</th>
                            <th scope="col">middle_name</th>
                            <th scope="col">last_name</th> --}}
                            {{-- <th scope="col">password</th> --}}
                            {{-- <th scope="col">phoneno</th> --}}
                            {{-- <th scope="col">address</th> --}}
                            {{-- <th scope="col">created_at</th>
                            <th scope="col">updated_at</th> --}}
                            <th scope="col">Show</th>
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
                                <th >{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>

                                {{-- <th>{{ $user->first_name }}</th>
                                <th>{{ $user->middle_name }}</th>
                                <th>{{ $user->last_name }}</th> --}}
                                {{-- <th>{{ $user->phoneno }}</th> --}}
                                {{-- <th>{{ $user->address }}</th> --}}

                                {{-- <th>{{ $user->password }}</th> --}}
                                <th>

                                    <a href={{ route('user.show', ['user' => $user->id]) }}>
                                        <button type="button"  type="button" class="btn btn-secondary">
                                            show {{ $user->id }}</button>
                                    </a>
                                </th>
                                <th>
                                    <a href={{ route('user.edit', ['user' => $user->id]) }}>
                                        <button type="button" class="btn btn-success mt-1">
                                            update {{ $user->id }}</button>
                                    </a>
                                </th>
                                <th>
                                    <form action={{ route('user.destroy', ['user' => $user->id]) }}
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-1">
                                            Delete {{ $user->id }}</button>
                                    </form>

                                </th>

                            </tr>
                        @endforeach

                    </tbody>
                </table>


                {{-- {{ $users->links() }} --}}


            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>
