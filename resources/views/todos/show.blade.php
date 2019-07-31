@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-success"> Go Back</a>
<h1>Todo Detail</h1>
<h3> {{$todo->text}} <span class="badge badge-pill badge-danger"> {{$todo->due}} </span></h3>
    <p> {{$todo->body}} </p>
@endsection
