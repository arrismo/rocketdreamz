

<!DOCTYPE html>
<html>
<head>
	<title>rocketdreamz</title>
</head>
<body>

	<h1> Create Notes</h1>

<form action="{{route('notes.store')}}" method="POST">
	{{csrf_field()}}

	<div class="form-group">
		<label for="title"> 
		Notes Title
	    </label>


		<input class="form-control" type="text" name="title"> 
	   

	<div>

	<div class="form-group">
		<label for="body">
			Note Body
		</label>
		<input class="form-control" type="text" name="title"> 
	   

	 </div>
		<input  type="hidden" name="notebook_id" value="{{$id}}"> 


		<input class="btn btn-primary" type="submit" value="Done"> 
	    </input>


</form>



</body>
</html>