@extends('layouts.app')
 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>rocketdreamz</title>

	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>





  





<style type="text/css">
	.spacing{
		margin-left: -1rem !important;
		margin-right: 1rem !important;
	}


</style>

</head>
<body> 
	<div class="container">
		<div class="row">
		  <h1> Dream List</h1>
	    </div>

   	
		<form action="{{ route('tasks.store') }}"  method='POST' class="form-inline">
			{{ csrf_field() }}


  			<div class="form-group spacing mb-2">
   				 <input type="text" name="newTaskName" class="form-control" >
  			</div>
  				<input type="submit" class="btn btn-primary mb-2" value='Add Task'>

			</form>



@if (count($storedTasks) > 0)
      <table class="table">
        <thead>
          <th>Task #</th>
          <th>Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>

        

        <tbody>
          @foreach ($storedTasks as $storedTask)
            <tr>
              <th>{{ $storedTask->id }}</th>
              <td>{{ $storedTask->name }}</td>
              <td> Edit </td>
              <td> Delete </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif

	
</body> 
</html>