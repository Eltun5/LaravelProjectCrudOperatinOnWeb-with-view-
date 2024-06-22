<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Category Create 123</h1>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <label for="title">
            Category name
        </label>
        <input type="text" id="title" name="title">
        <div>
        <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
