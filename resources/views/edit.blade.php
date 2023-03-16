<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <br>
    <div style="text-align: -webkit-center;">
        <h1>Edit Book: {{$book->title}}</h1>
        <br>
        <div class="card" style="width: 50%;">
            <br>
            <div style="">
                <form action="{{route('books.edit', $book->id)}}" novalidate method="POST">
                    @csrf
                    @method("PUT")
                    <div>
                        ISBN:<input type="text" name="isbn" value="{{$book->isbn}}"><br><br>
                        Title:<input type="text" name="title" value="{{$book->title}}"><br><br>
                        Author:<input type="text" name="author" value="{{$book->author}}"><br><br>
                    </div>
                    <div>
                        Description: <textarea name=description cols=50 rows=5> {{$book->description}} </textarea><br><br>
                        Price:<input type="number" name="price" value="{{$book->price}}"><br><br>
                    </div>
                    <button>Crear</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>