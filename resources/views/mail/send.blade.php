@extends('layouts.layout')

@section('title')@parent {{'Test mail'}} @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <form method="post" action="{{route('send')}}">
            @csrf
            <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Your email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="text">Your text</label>
                <textarea class="form-control" id="text" rows="5" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
