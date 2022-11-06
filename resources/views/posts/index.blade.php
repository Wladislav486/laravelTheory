<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
</head>
<body>
<h1>Список постов</h1>

<ul>
    <li>
        <a href="{{
        //параметры post, потому что при парсинге строки будет поиск ключа без буквы s
        // анные правила прописаны в таблличке https://skr.sh/sGhnEppJB0a
    route('posts.show', ['post' => 1])}}">show 1</a><br>
        <a href="{{route('posts.edit', ['post' => 1])}}">edit 1</a><br>
        <form action="{{route('posts.destroy', ['post' => 1])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete 1</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['post' => 2])}}">show 2</a><br>
        <a href="{{route('posts.edit', ['post' => 2])}}">edit 2</a><br>
        <form action="{{route('posts.destroy', ['post' => 2])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete 2</button>
        </form>

    </li>
    <li>
        <a href="{{route('posts.show', ['post' => 3])}}">Post 3</a><br>
        <a href="{{route('posts.edit', ['post' => 3])}}">edit 3</a><br>
        <form action="{{route('posts.destroy', ['post' => 3])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete 3</button>
        </form>
    </li>
</ul>

</body>
</html>
