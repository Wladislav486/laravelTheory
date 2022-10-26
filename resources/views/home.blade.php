<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>

    {{
    /**
    * Формирование ссылок
     */
    route('post', ['id' => 3, 'slug' => 'slug'])
}}
    <br>
{{route('admin.post', ['id' => 1])}}
</body>
</html>
