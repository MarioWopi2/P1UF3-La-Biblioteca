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
        <h1>Create Book</h1>
        <br>
        <div class="card" style="width: 50%;">
            <br>
            <div style="">
                <form action="{{route('books.create')}}" method="post">
                    @csrf
                    @method("POST")
                    <div>
                        ISBN:<input type="text" name="isbn"><br><br>
                        Title:<input type="text" name="title"><br><br>
                        Author:<input type="text" name="author"><br><br>
                        Published date:<input type="date" name="published_date"><br><br>
                    </div>
                    <div>
                        Description: <textarea name=description></textarea><br><br>

                        Categoria: <select name="category" class="form-control" style="width: 300px">

                            @foreach($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>

                            @endforeach
                        </select>
                        <br>
                        Price:<input type="number" name="price"><br><br>
                    </div>
                    <button>Crear</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>