{{-- @dd($data_join) --}}
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logoonly.png">
    <title>VENTI - Riwayat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
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
                      <li><a href="/">Home</a></li>
                      <li><a href="tabLacak" class="active">Lacak pesanan</a></li>
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

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Lacak pesanan</h3>
          {{-- <span class="breadcrumb"><a href="#">Home</a>  >  Contact Us</span> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section" style="text-align: center">
    <div class="container">
        <h5>Pesanan dengan email {{ $postEmail }}</h5>
        <br><br>
          <table class="table">
            <tr>
                <th style="background-color: #383838; border: solid 1px #222222; color: #fff;">NO</th>
                <th style="background-color: #383838; border: solid 1px #222222; color: #fff;">Nomor Pesanan</th>
                <th style="background-color: #383838; border: solid 1px #222222; color: #fff;">Kategori</th>
                <th style="background-color: #383838; border: solid 1px #222222; color: #fff;">Nominal Voucher</th>
                <th style="background-color: #383838; border: solid 1px #222222; color: #fff;">Metode pembayaran</th>
                <th style="background-color: #383838; border: solid 1px #222222; color: #fff;">Total Harga</th>
                <th style="background-color: #383838; border: solid 1px #222222; color: #fff;">Waktu pesanan</th>
            </tr>
            <?php
            $no = 1;
            ?>
            @foreach ($data_join as $item)
            <tr>
                <td>{{ $no }}</td>
                <td>INV-{{ $item['id'] }}</td>
                <td>{{ $item['nama_kategori'] }}</td>
                <td>{{ $item['nominal_voucher'] }}</td>
                <td>{{ $item['nama_metode'] }}</td>
                <td>{{ $item['total_harga'] }}</td>
                <td>{{ $item['waktu_pesanan'] }}</td>
            </tr>
                
            <?php
            $no++;
            ?>
            @endforeach
          </table>
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

  </body>
</html>