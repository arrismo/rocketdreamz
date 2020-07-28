

<!DOCTYPE html>
<html>
<head>
	<title>rocketdreamz</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



<link href="{{ URL::asset('css/ncreate.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>

	<div class="rocket">
    <div class="rocket-body">
      <div class="body"></div>
      <div class="fin fin-left"></div>
      <div class="fin fin-right"></div>
      <div class="window"></div>
    </div>
    <div class="exhaust-flame"></div>
    <ul class="exhaust-fumes">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <ul class="star">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>


	<h1 style="text-align: center"> Create Folder </h1>



<form action="/notebooks" method="POST">
	{{csrf_field()}}

	<div class="form-group" style="text-align: center">
		<label for="name"> 
		Folder Name
	    </label>


	<input type="text" name="name" class="formStyle" 
	style="border-bottom-width: 1px; 
     border-bottom-style: solid; 
     border-bottom-color: #ecf0f1;
     border-top-style: none; 
     border-right-style: none; 
     border-left-style: none;  
     background: transparent;  

     " 
 required />

	<div>

		<input class="btn" style="background-color: black" type="submit" value="Done"> 
	    </input>


</form>






</body>
</html>