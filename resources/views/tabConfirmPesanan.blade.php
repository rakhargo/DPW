{{-- @dd($kategori) --}}
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logoonly.png">
    <title>VENTI - Konfirmasi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
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
                      {{-- <li><a href="tabVoucher">Our Shop</a></li> --}}
                      <li><a href="tabLacak">Lacak pesanan</a></li>
                      <li><a href="{{url('loginadm')}}">Admin page</a></li>
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
      <div class="container" style="background-color: gray; border-radius: 25px; padding: 35px; width: 50%;">
        <div class="row">
          <input type="hidden" name="kategori" value="{{ $model->id_kategori }}">
          <input type="hidden" name="voucher" value="{{ $model->id_voucher }}">
          <input type="hidden" name="metode" value="{{ $model->id_metode }}">
          <input type="hidden" name="total_harga" value="{{ $model->total_harga }}">
          <input type="hidden" name="email" value="{{ $model->email }}">
          <input type="hidden" name="waktu_pesanan" value="{{ $model->waktu_pesanan }}">

          <h3 style="text-align: center;">KONFIRMASI PESANAN ANDA</h3>
          <br><br>
          <table  style="text-align: left;" align="center">
            <hr>
            <tr>
              <td width="100%"><h5>-Detail Pembelian-</h5></td>
            </tr>
            <tr>
              <td>Kategori</td>
              <th style="text-align: right;">{{ $kategori->nama_kategori }}</th>
            </tr>
            <tr>
              <td>Nominal Voucher</td>
              <th style="text-align: right;">{{ $voucher->nominal_voucher }}</th>
            </tr>
            <tr>
              <td>Metode Pembayaran</td>
              <th style="text-align: right;">{{ $metode->nama_metode }}</th>
            </tr>
            <tr>
              <td><h5 style="margin-top: 15px;">-Ringkasan Pembelian-</h5></td>
            </tr>

            <tr>
              <td width="30%">Email</td>
              <th style="text-align: right;">{{ $model->email }}</th>
            </tr>
            
            <tr>
              <td>Harga voucher</td>
              <th style="text-align: right;">RP. {{ number_format($voucher->harga_voucher, 0, "", ".") }}</th>
            </tr>

            <tr>
              <td>Biaya Admin</td>
              <th style="text-align: right;">RP. {{ number_format($metode->biaya_administrasi, 0, "", ".") }}</th>
            </tr>

            <tr>
              <td>Total Pembayaran</td>
              <th style="text-align: right;">RP. {{ number_format($model->total_harga, 0, "", ".") }}</th>
            </tr>
          </table>
          <a href="{{ url('tabDetails/'.$model->id_kategori.'') }}" style="text-align: left; margin-top: 10px;"><i class="bi-arrow-left-circle"></i>Cancel</a>
          <button type="submit" id="submitBtn" class="submit-btn" style="text-align: right; margin-top: 10px;">Bayar sekarang <i class="bi-arrow-right-circle"></i></button>
        </div>
      </div>
    </div> 
  </form>

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