<!DOCTYPE html>
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
    <a href="{{route('user.index')}}">
        <button  class="btn btn-success mt-1"> back</button>
    </a>
    <table class="table mt-5">
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
            {{-- @foreach ($user as $user) --}}
                <tr>
                    {{-- <th >{{++$i}}</th> --}}

                    <th scope="row">{{ $user->id }}</th>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->email }}</th>
                       <th>
                        <a href=  {{ route('user.edit', ['user'=>$user->id]) }}>
                            <button type="button" class="btn btn-success mt-1">
                                update {{ $user->id }}</button>
                        </a>
                    </th>
                    <th>
                        <a href={{ route('user.destroy', ['user'=>$user->id]) }}
                            onclick="return confirm('Are you sure you want to delete this item?' );">
                            <button type="button" class="btn btn-danger mt-1">
                                Delete {{ $user->id }}</button>
                        </a>
                    </th>

                </tr>
            {{-- @endforeach --}}


        </tbody>
    </table>


    </div>
    {{-- {{$user}} --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>
