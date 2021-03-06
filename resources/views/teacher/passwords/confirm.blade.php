<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
   <title>Confirm Password</title>
</head>
<body dir="rtl">
   <div class="container mt-5">
      <div class="row justify-content-around">
         <div class="col-md-5 text-center">
            <div class="card shadow">
              <div class="card-header bg-danger text-light">
                <h1> <i class="fas fa-user-lock"></i> </h1>
                <h4>Confirm Password</h4>
              </div>
               <div class="card-body">
               <form method="POST" action="{{route('password.confirm')}}" class="w-100 text-right">
                    @csrf
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="form-row">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                            <button type="submit" class="btn btn-danger m-auto">
                                Confirm Password
                            </button>
                        </div>
                            <div class="row">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link m-auto" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
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