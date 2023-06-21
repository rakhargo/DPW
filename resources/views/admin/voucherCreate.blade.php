<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>VENTI - Voucher Create</title> 

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="/assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/">Home</a></li>
                      {{-- <li><a href="/tabVoucher">Our Shop</a></li> --}}
                      <li><a href="/tabLacak">Lacak pesanan</a></li>
                      <li><a href="{{url('loginadm/logout')}}">Logout</a></li>
                      <li><a href="/tabAdmin">Admin page</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Admin</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Admin Page</span>
        </div>
      </div>
    </div>
  </div>
    
<div class="container">
    <h1>Create Voucher Baru</h1>
    <form action="{{ url('voucher') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nominalInput">Nominal</label>
            <input type="text" class="form-control" id="nominalInput" placeholder="Nominal" name="nominal_voucher" required>
        </div>
        <div class="form-group">
            <label for="priceInput">Harga Voucher</label>
            <input type="text" class="form-control" id="priceInput" placeholder="Harga" name="harga_voucher" required>
        </div>
        <div class="form-group">
            <label for="kategori">ID Kategori {{ $kategori->nama_kategori }}</label>
            <input type="text" class="form-control" id="kategori" value="{{ $kategori->id }}" name="id_kategori" >
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Coded by: Jason Suryoatmojo & Rakha Hariadi</p></div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/isotope.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/counter.js"></script>
  <script src="/assets/js/custom.js"></script>

  </body>
</html>