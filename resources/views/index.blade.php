<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Styles -->
</head>

<body class="antialiased">
    <a href="books/create">
        <button class="btn btn-success">Crear un Libro</button>
    </a>
    <div style="text-align: -webkit-center;">
        <h1 style="margin-top: 30px;">Books</h1><br>
        <table class="table table-striped" style="width: 70%; text-align: center;">
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Author
                </th>
                <th>
                    Description
                </th>
                <th>
                    Price
                </th>
                <th>
                    Más información
                </th>
                <th>
                    Modificar
                </th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td> {{$book->title}} </td>
                <td> {{$book->author}} </td>
                <td> {{$book->description}} </td>
                <td> {{$book->price}}€ </td>
                <td>
                    <a href="books/{{$book->id}}">
                        <button class="btn btn-success" style="width: max-content;">Show more</button>
                    </a>
                </td>
                <td>
                    <a href="books/{{$book->id}}/edit">
                        <button class="btn btn-warning" style="width: max-content;">Edit</button>
                    </a>
                    <form action="{{route('books.delete', $book->id)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
    <br>
</body>

</html>