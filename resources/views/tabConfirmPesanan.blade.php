{{-- @dd($kategori) --}}
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming Template - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/">Home</a></li>
                      <li><a href="tabVoucher">Our Shop</a></li>
                      <li><a href="tabLacak" class="active">Lacak pesanan</a></li>
                      <li><a href="tabAdmin">Admin page</a></li>
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
          <h3>Konfirmasi pesanan</h3>
          
        </div>
      </div>
    </div>
  </div>

  <form action="{{ url('pesanan') }}" method="POST">
    @csrf
    <div class="contact-page section">
      <div class="container">
        <div class="row">
          <input type="hidden" name="kategori" value="{{ $model->id_kategori }}">
          <input type="hidden" name="voucher" value="{{ $model->id_voucher }}">
          <input type="hidden" name="metode" value="{{ $model->id_metode }}">
          <input type="hidden" name="total_harga" value="{{ $model->total_harga }}">
          <input type="hidden" name="email" value="{{ $model->email }}">
          <input type="hidden" name="waktu_pesanan" value="{{ $model->waktu_pesanan }}">

          <h3>Pesanan dengan email {{ $model->email }}</h3>
          <h5>Nama Kategori : {{ $kategori->nama_kategori }}</h5>
          <h5>Nominal Voucher : {{ $voucher->nominal_voucher }}</h5>
          <h5>Metode Pembayaran : {{ $metode->nama_metode }}</h5><br>
          <h5>Total Harga : {{ $model->total_harga }}</h5>
          <h5>Rincian Biaya:</h5>
          <h5>Harga Voucher: {{ $voucher->harga_voucher }}</h5>
          <h5>Biaya Admin : {{ $metode->biaya_administrasi }}</h5>
          <a href="{{ url('tabDetails/'.$model->id_kategori.'') }}">Cancel</a>
          <button type="submit" id="submitBtn"><i class="fa fa-shopping-bag"></i>Bayar sekarang</button>
        </div>
      </div>
    </div> 
  </form>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>