

<!DOCTYPE html>
<html>
<head>
	<title>rocketdreamz</title>
</head>
<body>

	<h1> Create New File</h1>

<form action="{{route('notes.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">
                Note Title
            </label>
            <input class="form-control" name="title" type="text">
            
        </div>
        <div class="form-group">
            <label for="body">
                Note Body
            </label>
            <input class="form-control" name="body" type="text">
            
        </div>

        <input type="hidden" name="notebook_id" value="{{$id}}">
        
        <input class="btn btn-primary" type="submit" value="Done">
        </input>
        
    </form>
</div>



</body>
</html>