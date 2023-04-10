<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="antialiased">
    <h1>Home Page</h1>
    <a href="{{ route('user.index') }}">
        <button type="button" class="btn btn-primary">User
        </button></a>
    <br>
    <br>

    <a href="{{ route('login') }}">
        <button type="button" class="btn btn-primary">Log in
        </button></a>
    <br>
    <br>


    <form action="{{ route('fileupload') }}" method="post" enctype="multipart/form-data"> Select image to upload:
        @csrf
        <input required type="file" name="image" id="fileToUpload">
        <br><br>    <input type="submit" class="btn btn-primary" value="Upload Image" name="submit">
    </form>

    <br>
    <br>
    @if($test)
    
    <img class="mt-4" src="
    {{ asset('images/'.$test) }}
    " alt=" " height="200px">
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>