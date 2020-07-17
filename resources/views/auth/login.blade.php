
<!DOCTYPE html>
<html>
<head>
    <title>rocketdreamz</title>
   <link href="{{ asset('css/login.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/login2.css') }}" rel="stylesheet"> 



   <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


</head>
<body>


<video playsinline autoplay muted loop  id="bgvid">
  <source src="{{asset('video/login_video.mp4')}}" type="video/mp4">
</video>



<!--
<div class="login-box">
  <h2>{{ __('LOGIN') }}</h2>
  <form method="POST" action="{{route('login')}}">
    @csrf
    <div class="user-box">
        
        <input type="text" name="" required="" >
        <label for="email">{{ __('E-Mail Address') }}</label>

      
    </div>
    

    <div class="user-box">
      <input type="password" name="" required="">
      <label>{{ __('Password') }}</label>
    </div>


    <a href="">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
     {{ __('Login') }}
    </a>
  </form>
</div>

-->


<div class="login-box">
        <h2>{{ __('Welcome Back!') }}</h2>
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="user-box">

<label for="email" style="position: static !important">{{ __('E-Mail Address') }}</label>

                        
<input id="email" type="email" class=" @error('email') is-invalid @enderror" placeholder="enter email here" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="user-box">
                            <label for="password" style="position: static !important" >{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required  placeholder="enter password here">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        
                        <button  type="submit"   >
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>



                                    {{ __('Login') }}
                                </button>


                                @if (Route::has('password.request'))
                                    <a style="color: white;" class="btn" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                         
         </form>
                
</div>

</body>
</html>

