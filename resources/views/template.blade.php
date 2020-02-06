<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/script.js"></script>
	<title>Todo</title>
</head>
<body>
  <div id="container">
    <h1>To-Do List</h1>
     <form action="/" method="POST">
 	 @csrf
 	 <input type="text" name="todo" placeholder="write here">
 	 <button type="submit" class="btn btn-primary" style="position: relative; left: 85%; margin: 5px;">Add</button>
     </form>    
    <ul>
    	@foreach($todos as $todo)
        <li><a href="/delete/{{$todo->id}}/"><span><i class="fa fa-trash"></i></span></a>{{$todo->todo}}</li>
        @endforeach
    </ul>
  </div>

<!--- script part--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!---End script--->
</body>
</html>