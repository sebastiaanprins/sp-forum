@extends('layout')

@section('title', 'Forum')

@section('header', 'Welcome on this forum!')

@section('content')
    <h4>Choose a discussion:</h4>
    <ol>
        <li><a href="/stmt1">Why bananas are orange ?</a></li>
        <li><a href="/stmt2">Why is the grass blue ?</a></li>
        <li><a href="/stmt3">Why is a fly called after what it is doing ?</a></li>
    </ol>
@endsection