<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>rocketdreamz</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
<div id="app">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">rocketdreamz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
           <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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

                <h1 class="pull-xs-left">
                    Your Notebooks
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="#" role="button">
                        New NoteBook +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
               </div>


               <div class="row" style="padding-left: 35px; padding-right: 30px;">
               
                <div class="col-sm-6 col-md-3" >
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                                <h4 class="card-header">
                                    Personal
                                </h4>
                            </a>
                        </div>
                        
                        <p> some text </p>
                        <div class="card-footer">
                            <a class="card-link" href="#">
                                Edit Notebook
                            </a>
                            <form action="#" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>

                 <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                                <h4 class="card-header">
                                    Personal
                                </h4>
                            </a>
                        </div>

                        <p> some text </p>
                        
                        <div class="card-footer">
                            <a class="card-link" href="#">
                                Edit Notebook
                            </a>
                            <form action="#" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                                <h4 class="card-header">
                                    Personal
                                </h4>
                            </a>
                        </div>

                        <p> some text </p>
                        
                        <div class="card-footer">
                            <a class="card-link" href="#">
                                Edit Notebook
                            </a>
                            <form action="#" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                                <h4 class="card-header">
                                    Personal
                                </h4>
                            </a>
                        </div>

                        <p> some text </p>
                        
                        <div class="card-footer">
                            <a class="card-link" href="#">
                                Edit Notebook
                            </a>
                            <form action="#" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>

                          
</div>













</body>
</html>