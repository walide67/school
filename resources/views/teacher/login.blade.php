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
   <div class="container mt-5">
      <div class="row justify-content-around">
         <div class="col-md-5 text-center">
            <div class="card">
              <div class="card-header bg-info text-light">
                <h1> <i class="fas fa-user-lock"></i> </h1>
                <h4>Teachers Login</h4>
              </div>
               <div class="card-body">
                  <form id="sign_in_adm" class="text-left" method="POST" action="">
                     {{ csrf_field() }}
                  <div class="form-group">
                    <label for="email">Email / Phone Number</label>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="password">Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <br>
                  <div class="text-center">
                     <button type="submit" class="btn  btn-info">Login</button>
                  </div>
                  </form>
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