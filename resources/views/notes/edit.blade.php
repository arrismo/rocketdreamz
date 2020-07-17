<!DOCTYPE html>
<html>
<head>
	<title>rocketdreamz</title>
</head>
<body>

	<h1> Edit Note </h1>

<form action="{{route('notes.update',$note->id)}}" method="POST">
{{method_field('PUT')}}

	<div class="form-group">
		<label for="title"> 
		Note
	    </label>


		<input class="form-control" type="text" name="title"> 
	    </input>

	</div>
	<div class="form-group">
		<label for="body">
			Note Body
		</label>
		<input class="form-control" type="text" name="body">
	</div>
	{{csrf_field()}}


		<input class="btn btn-primary" type="submit" value="Done"> 
	    </input>


  </form>
</body>
</html>