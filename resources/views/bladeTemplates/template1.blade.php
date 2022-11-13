@extends('layouts.layout')

@section('title')@parent:: {{$title}} @endsection

@section('header')
    123
    @parent
@endsection

@section('content')
<div class="container">
    <h1>Template1</h1>
</div>
@endsection
