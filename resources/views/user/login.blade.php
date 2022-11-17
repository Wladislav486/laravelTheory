@extends('layouts.layout')

@section('title')@parent Login @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <form method="post" action="{{route('login')}}">
            @csrf

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
