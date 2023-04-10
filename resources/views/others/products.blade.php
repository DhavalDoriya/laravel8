<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product List</title>
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
    <br>
    <br>

    <div class="container">
        <h1> Product List</h1>
        <form action="/search" method="get">
            <input type="text" placeholder="field name" name="name">
            <input type="text" placeholder="search" name="value">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href={{ route('products') }}>
            reload
        </a>

        <br>
        {{-- <div class="d-flex justify-content-between mt-3">
            @if ($page >= 1)
            <a href={{ route('products', ['page' => $page - 1]) }}>
                <button type="submit" class="btn btn-primary">Previous</button>
            </a>
            @endif

            <a href={{ route('products', ['page' => $page + 1]) }}>
                <button type="submit" class="btn btn-primary">Next</button>
            </a>
        </div> --}}
        <br>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>
                        <a href={{ route('sort', ['sortby' => 'name']) }}>
                            name
                        </a>
                    </th>
                    <th> detail</th>
                    <th>
                        <a href={{ route('sort', ['sortby' => 'price']) }}>
                            price
                        </a>
                    </th>
                    <th> stock</th>
                    <th> discount</th>
                    <th> created_at</th>
                    <th> updated_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $product->id }}</th>
                        <th>{{ $product->name }}</th>
                        <th>{{ $product->detail }}</th>
                        <th>{{ $product->price }}</th>
                        <th>{{ $product->stock }}</th>
                        <th>{{ $product->discount }}</th>
                        <th>{{ $product->created_at }}</th>
                        <th>{{ $product->updated_at }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-5">

            {{-- {{ $users->links() }} --}}
            {{ $products->onEachSide(1)->links() }}


        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
