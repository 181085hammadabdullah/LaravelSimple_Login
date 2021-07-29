<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>
<body>
    <div class="container col-lg-3 col-md-5 col-sm-7">
<br><br><br><br>
    <!-- Material form login -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Register</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form class="text-center" style="color: #757575;"method="POST" action="{{ route('register') }}">
        @csrf
         <!-- Name -->
         <div class="md-form">
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" 
            name="name" value="{{ old('name') }}" required autocomplete="name" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
            <label for="name">Name</label>
          </div>
        <!-- Email -->
        <div class="md-form">
          <input type="email" id="materialLoginFormEmail" class="form-control @error('email') is-invalid @enderror" 
          name="email" value="{{ old('email') }}" required autocomplete="email" >
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror
          <label for="materialLoginFormEmail">E-mail</label>
        </div>
  
        <!-- Password -->
        <div class="md-form">
          <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
          <label for="password">Password</label>
        </div>
  {{-- Password Confrim --}}
        <div class="md-form">
            <input type="password" id="password-confirm" class="form-control " name="password_confirmation" required autocomplete="new-password">
           
            <label for="password-confirm">Confrim Password</label>
          </div>
  
        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>
  
        <!-- Register -->
        <p>Already a member?
          <a href="{{route('login')}}">Sign In</a>
        </p>
  
        <!-- Social login -->
        <p>or sign in with:</p>
        <a type="button" class="btn-floating btn-fb btn-sm">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a type="button" class="btn-floating btn-tw btn-sm">
          <i class="fab fa-twitter"></i>
        </a>
        <a type="button" class="btn-floating btn-li btn-sm">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a type="button" class="btn-floating btn-git btn-sm">
          <i class="fab fa-github"></i>
        </a>
  
      </form>
      <!-- Form -->
  
    </div>
  
  </div>
</div>
  <!-- Material form login -->
</body>
</html>