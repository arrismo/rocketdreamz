

<!DOCTYPE html>
<html>
<head>
	<title>rocketdreamz</title>
</head>
<body>

	<h1> Create Notebook </h1>

<form action="/notebooks" method="POST">
	{{csrf_field()}}

	<div class="form-group">
		<label for="name"> 
		Notebook Name
	    </label>


		<input class="form-control" type="text" name="name"> 
	    </input>

	<div>

		<input class="btn btn-primary" type="submit" value="Done"> 
	    </input>


</form>



</body>
</html>