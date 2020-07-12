


<!DOCTYPE html>
<html>
<head>
	<title>rocketdreamz</title>
</head>
<body>

	<h1> Edit Notebook </h1>

<form action="/notebooks/{{$notebooks->id}}" method="POST">

{{csrf_field()}}
{{method_field('PUT')}}

	<div class="form-group">
		<label for="name"> 
		Notebook Name
	    </label>


		<input class="form-control" type="text" name="name"> 
	    </input>

	<div>

		<input class="btn btn-primary" type="submit" value="update"> 
	    </input>


</form>



</body>
</html>