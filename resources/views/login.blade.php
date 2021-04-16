<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="{{asset('assets/img/icon.png') }}" rel="icon">

    <link rel="stylesheet" href="{{asset('login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Login SIP TANI</title>
  </head>
  <body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="{{asset('login/images/login.png')}}" alt="">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>SIP TANI</strong></h3>
              <p class="mb-4"></p>
            </div>
            <form action="{{url('/kirimdata')}}" method="post">
                @csrf
              <div class="form-group first">
                {{-- <label for="email">Email</label> --}}
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">


              </div>
              <div class="form-group last mb-4">
                {{-- <label for="password">Password</label> --}}
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">

              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-success">



            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  @include('sweet::alert')

  </body>
</html>
