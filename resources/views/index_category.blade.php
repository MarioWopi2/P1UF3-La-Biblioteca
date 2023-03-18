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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Styles -->
</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/books">Stuteca</a>

        <div class="navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li>
                    <a href="/books/create" style="margin: 20px;">
                        <button class="btn btn-success">Crear un Libro</button>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach($categories as $category)
                        <a class="dropdown-item" href="{{route('books.category', $category->id)}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </nav>

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
                    <a href="/books/{{$book->book_id}}">
                        <button class="btn btn-success" style="width: max-content;">Show more</button>
                    </a>
                </td>
                <td>
                    <a href="/books/{{$book->book_id}}/edit">
                        <button class="btn btn-warning" style="width: max-content;">Edit</button>
                    </a>
                    <form action="{{route('books.delete', $book->book_id)}}" method="post">
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
    <div class="d-flex justify-content-center">
        {{$books->links()}}
    </div>
</body>

</html>