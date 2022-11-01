<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
</head>
<body>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>

</body>
</html>
