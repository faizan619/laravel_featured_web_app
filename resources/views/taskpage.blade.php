@extends('masterlayout')

@section('title')
    Task | Task Manager
@endsection

@section('body')
    @include("todo.todoform");
@endsection