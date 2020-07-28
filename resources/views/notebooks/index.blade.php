<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>rocketdreamz</title>
    <link rel="icon" href="{{asset('images/favicon.ico') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link href="{{ asset('css/N1.css') }}" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body style="background: linear-gradient(to right, #434343, #000000);">

<div id="app">
	<nav class="navbar navbar-expand-lg " style="background: linear-gradient(to right, #434343, #000000);">
  <a class="navbar-brand" style="color: white" href="/home">rocketdreamz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      
           <li class="nav-item dropdown">
                <a id="navbarDropdown" style="color: white; float:left;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  Welcome  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                   </form>
                 </div>
            </li>

    </div>
  </div>
</nav>

</div>




<div class="container text-center">

                {{-- <h1 class="pull-xs-left" style="color: white">
                    {{ Auth::user()->name }} Dreams
                </h1> --}}


                <div class="pull-xs-right">
                    <a class="btn btn-lg" style="background-color: white; " href="/notebooks/create" role="button">
                        Add New Dream 
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
               </div>


               <div class="row" style="padding-left: 35px; padding-right: 30px;">
               
               <!-- Notebook 1 -->

               @foreach($notebooks as $notebook)
                <div class="col-sm-6 col-md-3" >
                    <div class="card" style="box-shadow: 0 .20rem 2rem rgb(236, 9, 9) !important; border:none;">
                        <div class="card-block">
                            <a href="{{route("notebooks.show",$notebook->id)}}">
                                <h4 class="card-header" style="background-color:black; color:white;text-align: center;">
                                    {{$notebook->name}}
                                </h4>
                            </a>
                        </div>
                        <div class="card-footer" style="background-color:black">
                        <a class="card-link" style="color:white" href="{{route("notebooks.edit",$notebook->id)}}">
                                Edit Folder
                            </a>
                            <form action="/notebooks/{{$notebook->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">

                            	{{csrf_field()}}
                            	{{method_field('DELETE')}}

                                <input class="btn btn-sm btn-danger" type="submit" value="Delete" style="margin-left: 80px;">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach




                <!-- end of notebook 1 -->


                          
</div>













</body>
</html>