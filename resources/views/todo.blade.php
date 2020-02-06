@extends('template')


@section('content')
 <h1>To-Do List</h1>
 <CENTER><a href="/addtodo"><button class="btn btn-primary" style="margin: 2px;">Add Todo list</button></a></CENTER>
    
    <ul>
    	@foreach($todos as $todo)
        <li><span><i class="fa fa-trash"></i></span>{{$todo->todo}}</li>
        @endforeach
    </ul>

@endsection