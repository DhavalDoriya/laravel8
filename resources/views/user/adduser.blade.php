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
        <a href="{{route('user.index')}}">
            <button  class="btn btn-success mt-1"> back</button>
        </a>
        <div class="container mt-5">
            <h2>User Form</h2>
            <form action={{ route('user.store') }} method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="name" name="name" class="form-control"   id="name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label">first_name</label>
                    <input  type="name" name="first_name" class="form-control" id="name">
                    @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="middle_name" class="form-label">middle_name</label>
                    <input type="name" name="middle_name" class="form-control" id="name">
                    @error('middle_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">last_name</label>
                    <input type="name" name="last_name" class="form-control" id="name">
                    @error('last_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('Password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">phone</label>
                    <input type="tel" name="phone" class="form-control" id="exampleInputPassword1">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">address</label>
                    <input type="name" name="address" class="form-control" id="name">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Image</label>
                    <input type="file" name="image" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>
