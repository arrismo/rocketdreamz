<!DOCTYPE html>
<html>
<head>
	<title>rocketdreamz</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body>

<div style="background: #FF4444;
  height: 180px;
  border-top: 20px solid #CC0000;">
  
	<div class="container" > 
		<h1 class="pull-xs-left" style="text-align: center">
			Your Files

		</h1> 
		<div class="pull-xs-left" style="text-align: center; padding-bottom: 20px;">

<a class="btn " style="text-align: center; background-color: black; color:white;" href="{{route('notes.createNote',$notebook->id)}}" role="button">
				Add New File 
			</a>
		</div>

</div>



		@foreach($notes as $note)
		<div class="card" style="margin-right: 80px; margin-left: 80px;">


			<a href="{{route('notes.show',$note->id)}}">
				<h4 class="card-title">
					{{$note->title}}
				</h4>
			</a>

			<p class="card-text">
				{{$note->body}}
			</p>


        <div style="display:felx; flex-wrap:wrap; ">
	         <a class="btn btn-sm btn-info pull-xs-left" style="margin-right: 10px" href="{{route('notes.edit',$note->id)}}">
				Edit 
			</a>
			<form action="{{route('notes.destroy',$note->id)}}" class="pull-xs-right" method="POST">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input class="btn btn-sm btn-danger" type="submit" value="Delete">
				
			</form>
		</div>
	</div>

		@endforeach







</body>
</html>