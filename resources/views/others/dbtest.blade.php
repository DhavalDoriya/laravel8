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
            <div class="col-12">
                {{-- <a href={{ route('adduser') }}>
                    add user
                </a> --}}

                <br>

                @if ($message)
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>{{ $message }}</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                @endif

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    add user data </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> User Form
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/saveuser" method="post" class="mt-5">
                                    @csrf
                                    <input type="text" placeholder="name" name="name">
                                    <br> <br>
                                    <input type="text" placeholder="email" name="email">
                                    <br> <br>
                                    <input type="text" placeholder="password" name="password">
                                    <br> <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <h2>User Data</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">update</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <th>{{ $user->name }}</th>
                            <th>{{ $user->email }}</th>
                            <th>
                                <a href="/updateuser/{{ $user->id }}">update {{ $user->id }} </a>
                                {{-- <form action="/deleteuser/"{{ $user->id }} method="post">
                                        <input type="submit" value="submit">
                                    </form> --}}
                            </th>

                            <th>
                                <a href="/deleteuser/{{ $user->id }}"
                                    onclick="return confirm('Are you sure you want to delete this item?' );">Delete</a>


                                {{-- <a href="/deleteuser/{{ $user->id }}"> delete {{ $user->id }} </a> --}}
                                {{-- <form action="/deleteuser/"{{ $user->id }} method="post">
                                        <input type="submit" value="submit">
                                    </form> --}}
                            </th>

                        </tr>
                    @endforeach

                </tbody>
            </table>


            <!-- Button trigger modal -->




            <div class="mt-5 d-flex justify-content-between">

                {{-- {{ $users->links() }} --}}
                {{ $users->onEachSide(2)->links() }}


            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>
