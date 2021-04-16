

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Halaman Data Pupuk Pestisida</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('argon/assets/img/brand/icon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('argon/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{asset('argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('argon/assets/css/argon.css?v=1.2.0" type="text/css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link href='https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('assets/js/Lightweight-Chart/cssCharts.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('argon/assets/img/brand/siptani.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/mitra')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/mitra/produk')}}">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Produk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('/mitra/kategori')}}">
                <i class="ni ni-tag text-primary"></i>
                <span class="nav-link-text">Kategori</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-bag-17 text-primary"></i>
                <span class="nav-link-text">Transaksi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/konsumen')}}">
                <i class="ni ni-money-coins text-primary"></i>
                <span class="nav-link-text">Pelanggan</span>
              </a>
            </li>

          </ul>

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->

          <!-- Navigation -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">

                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span >Selamat datang {{ Auth::guard('mitra')->user()->nama }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-divider"></div>

                <a href="{{url('/keluar')}}" class="dropdown-item">
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-12 col-13">
              <h6 class="h2 text-white d-inline-block mb-0">Produk Obat Pestisida</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('/mitra')}}">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Produk Pupuk</li>
                </ol>
              </nav>
              <div class="card-action">
                <a href="{{url('/mitra/tambah_pupuk')}}" class="btn btn-success btn-sm"><i class="fa fa-plus p-r-5">  TAMBAH PUPUK</i></a>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">

              <br>
              <div class="table-responsive">
                <table class="table table-light" id="datatables">
                    <thead>
                      <tr  class="table-success">
                        <th>No</th>
                        <th>Produk Pestisida</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Keunggulan</th>
                        <th>Komposisi</th>
                        <th>Penggunaan</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($produk as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nama_pupuk}}</td>
                            <td><img width="150px" src="{{ url('/gambar_pupuk/'.$p->gambar) }}"></td>
                            <td>{{$p->deskripsi_obat}}</td>
                            <td>{{$p->stok}}</td>
                            <td>{{$p->keunggulan}}</td>
                            <td>{{$p->komposisi}}</td>
                            <td>{{$p->penggunaan}}</td>
                            <td>{{$p->kategori->nama_kategori}}</td>
                            <td>{{$p->harga}}</td>




                            <td>
                                <a href="/pupuk/edit/{{ $p->id }}"class="btn btn-success" ><i class="fa fa-edit"></i></a>
                                <a href="/pupuk/delete/{{ $p->id }}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                  </table>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>

        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

  <script src="{{asset('argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{asset('argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('argon/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{asset('argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{asset('argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{asset('argon/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{asset('argon/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{asset('argon/assets/js/argon.js?v=1.2.0') }}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script>
    $(function () {
        $("#datatables").DataTable();
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        });
    });
    </script>
    @include('sweet::alert')
</body>

</html>
