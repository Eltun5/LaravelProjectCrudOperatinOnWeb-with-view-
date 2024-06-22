<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Categories 123</h1>
<a href="/categories/create">
    <button type="submit">Create</button>
</a>

<h2>Title:</h2>
@foreach($categories as $category)
    <div style="display: flex; justify-content: space-between ">
        <span>{{$category->title}}</span>
        <div>
            <form style="display: inline" action="{{route('categories.destroy',$category->id)}}" method="post">
            @csrf
            @method('delete')
                <button type="submit">Destroy</button>
            </form>
            <a style="display: inline" href="{{route('categories.edit', $category->id)}}">
                <button type="submit">Edit</button>
            </a>
        </div>
    </div>
@endforeach

</body>
</html>
