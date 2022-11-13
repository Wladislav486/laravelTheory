

@extends('layouts.layout')

@section('title')@parent {{$title}} @endsection

@section('header')
    @parent
@endsection






@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">

            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <h5 class="card-body">{{$post->title}}</h5>
                        <p class="card-text">{{$post->content}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small
                                class="text-muted">
{{--                                {{$post->created_at}}--}}
                            {{--    {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d.m.Y')}}--}}
                                {{$post->getPostDate()}}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection










{{--
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
--}}

