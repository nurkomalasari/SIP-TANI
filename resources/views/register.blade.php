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

    <title>Resgister SIP TANI</title>
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
              <h3>Sign Up <strong>SIP TANI</strong></h3>
              <p class="mb-4"></p>
            </div>
            <form action="{{url('/register/konsumen')}}" method="post">
                @csrf
              <div class="form-group first">
                {{-- <label for="email">Email</label> --}}
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
              </div>
              <div class="form-group first">
                {{-- <label for="email">Email</label> --}}
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
              </div>
              <div class="form-group last mb-4">
                {{-- <label for="password">Password</label> --}}
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <div class="form-group last mb-4">
                {{-- <label for="password">Password</label> --}}
                <input type="number" class="form-control" id="noKtp" placeholder="Nomer KTP" name="noKtp">
              </div>
              <div class="form-group last mb-4">
                {{-- <label for="password">Password</label> --}}
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
              </div>
              <div class="form-group last mb-4">
                {{-- <label for="password">Password</label> --}}
                <input type="number" class="form-control" id="noHp" placeholder="Nomer Handphone" name="noHp">
              </div>



              <input type="submit" value="Register " class="btn text-white btn-block btn-success">



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
