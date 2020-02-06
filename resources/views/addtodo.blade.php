@extends('template')


@section('content')
 <h1>Add To-Do List</h1>
 <form action="/" method="POST">
 	@csrf
 	<input type="text" name="todo" placeholder="write here"><br>
 	<button type="submit" class="btn btn-primary" style="margin: 7px;">Add</button>
 </form> 

@endsection