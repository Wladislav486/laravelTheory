<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
</head>
<body>


<form action="{{route('contact_edit_method')}}">

{{--    {{method_field('PUT')}}--}}
    @method('PUT')
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">submit</button>
</form>
</body>
</html>
