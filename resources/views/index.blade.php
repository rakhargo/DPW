<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logoonly.png">
    <title>VENTI - Index</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

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
                      <li><a href="/" class="active">Home</a></li>
                      {{-- <li><a href="tabVoucher">Our Shop</a></li> --}}
                      <li><a href="tabLacak">Lacak pesanan</a></li>
                      <li><a href="loginadm">Admin page</a></li>
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

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to VENTI</h6>
            <h2>TEMPAT TOPUP VOUCHER TERBAIK!</h2>
            <p>Bingung topup dimana? VENTI adalah tempatnya! <br> <br> VENTI menyediakan berbagai macam voucher dengan harga yang sangat terjangkau, dan tentu saja aman serta sudah dipercaya banyak orang.</p>

          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">

          <div class="mySlides fade">
            <img src="assets/images/steam.png" style="width:100%">
          </div>
          <div class="mySlides fade">
            <img src="assets/images/googlle.png" style="width:100%">
          </div>
          <div class="mySlides fade">
            <img src="assets/images/rilps.png" style="width:100%">
          </div>
          <br>

          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>

        </div>
      </div>
    </div>
  </div>
 
  <div class="section categories">
    <div class="container">
      <div class="row gx-5">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            {{-- <h6>Kategori</h6> --}}
            <h2>Kategori</h2>
          </div>
        </div>
        <?php
        $no = 1;
        ?>
        @foreach ($datas as $kateg)
        <div class="col-2">
          <div class="item">
            <div class="thumb">
              <a href="{{ url('tabDetails/'.$kateg->id.'') }}">
                <img src="{{ asset('storage/' .$kateg->gambar_kategori) }}" alt="">
              </a>
            </div>
            <h4>{{ $kateg->nama_kategori }}</h4>
          </div>
        </div>
        <?php
        $no++;
        ?>
        @endforeach

      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Coded by: <a href="mailto:jasonsuryoatmojo@upi.edu" style="color: blue">Jason Suryoatmojo</a> & <a href="mailto:rakhadh@upi.edu" style="color: blue">Rakha Dhifiargo</a> <br>Kontak kami lewat tulisan biru diatas</p>
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
  <script src="assets/js/script.js"></script>

  </body>
</html>