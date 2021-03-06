<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
   <title>Teachers Login</title>
</head>
<body>
   <div class="container my-5">
      <div class="row justify-content-around">
         <div class="col-md-5 text-center">
            <div class="card shadow">
              <div class="card-header bg-info text-light">
                <h1> <i class="fas fa-user-lock"></i> </h1>
                <h4>Teachers Login</h4>
              </div>
               <div class="card-body">
                  @if($error = $errors->first('faild'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                     </button>
                    {{$error}}
                  </div>
                  @endif
               <form class="text-left" method="POST" action="{{route('teacher.login.submit')}}">
                     @csrf
                  <div class="form-group">
                    <label for="identify">Email / Phone Number</label>
                     <input type="text" class="form-control" id="identify" name="identify" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                     @error('identify')
                     <small class="text-danger" >{{$message}}</small>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  <small><a href="{{route('teacher.password.request')}}" class="text-primery">Forgot password ?</a></small>
                     @error('password')
                     <small class="text-danger" >{{$message}}</small>
                     @enderror
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember_me" id="remember_me" value="{{old('remember_me')}}">
                      Remember Me
                    </label>
                  </div>
                  <br>
                  <div class="text-center">
                     <button type="submit" class="btn  btn-info">Login</button>
                  </div>
                  </form>
                  <h6 class="py-2"><a href="#" class="text-primery">Create account</a></h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="{{asset('jquery/jquery-3.5.1.min.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>