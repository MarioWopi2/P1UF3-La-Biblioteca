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
    <div style="text-align: -webkit-center;">
        @if(!$entra)
        <h1>ERROR: LIBRO NO ENCONTRADO</h1>
        @else

        <h1 style="margin-top: 30px;">{{$book->title}}</h1><br>
        <table class="table table-striped" style="width: 70%; text-align: center;">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    ISBN
                </th>
                <th>
                    Title
                </th>
                <th>
                    Author
                </th>
                <th>
                    Published date
                </th>
                <th>
                    Description
                </th>
                <th>
                    Price
                </th>
                <th>
                    Created At
                </th>
                <th>
                    Updated At
                </th>
            </tr>
            <tr>
                <td> {{$book->id}} </td>
                <td> {{$book->isbn}} </td>
                <td> {{$book->title}} </td>
                <td> {{$book->author}} </td>
                <td> {{$book->published_date}} </td>
                <td> {{$book->description}} </td>
                <td> {{$book->price}}€ </td>
                <td> {{$book->created_at}} </td>
                <td> {{$book->updated_at}} </td>
            </tr>
        </table>
    </div>


    <br>
    @endif
</body>

</html>