@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{$task->name}}</h1>
    <p>{{$task->description}}</p>

    <a href="{{url('/task')}}">Back to Task</a>
</div>

@endsection