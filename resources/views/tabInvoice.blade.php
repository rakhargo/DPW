{{-- @dd($model) --}}
<?php
  use Illuminate\Support\Str; 
  function generateSteamWalletCode()
  {
      $codeLength = 16; // Total panjang kode
      $sectionLength = 4; // Panjang setiap bagian kode
      $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Huruf abjad besar yang tersedia
      $sections = []; // Array untuk menyimpan setiap bagian kode

      // Generate setiap bagian kode dengan panjang yang diinginkan
      for ($i = 0; $i < $codeLength; $i += $sectionLength) {
          $section = '';
          for ($j = 0; $j < $sectionLength; $j++) {
              $section .= $alphabet[random_int(0, strlen($alphabet) - 1)];
          }
          $sections[] = $section; // Tambahkan bagian kode ke dalam array
      }

      // Gabungkan setiap bagian kode dengan tanda "-"
      $randomCode = implode('-', $sections);

      return $randomCode;
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logoonly.png">
    <title>VENTI - Invoice</title>

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
                      {{-- <li><a href="tabVoucher">Our Shop</a></li> --}}
                      <li><a href="tabLacak">Lacak pesanan</a></li>
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
          <h3>Bukti Pembayaran</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container" style="background-color: #313131; border-radius: 25px; padding: 35px; width: 50%; color: #fff; border: gray 5px solid">
      <div class="row">
        <table>
          <tr>
            <td>Waktu Pembelian</td>
            <td>Nomor pesanan</td>
            <td>Metode Pembayaran</td>
          </tr>
          <tr>
            <th>{{ $model->waktu_pesanan }}</th>
            <th>INV-{{ $model->id }}</th>
            <th>{{ $metode->nama_metode }}</th>
          </tr>
        </table>

      </div>
    </div>
  </div>


  <div class="contact-page section" style="margin-top: 20px;">
    <div class="container" style="background-color: #313131; border-radius: 25px; padding: 35px; width: 50%; color: #fff; margin-bottom: 50px; border: gray 5px solid">
      <div class="row">

        <h3 style="text-align: center; color: #fff;">Detail</h3>
        {{-- <br><br> --}}
        <table style="text-align: left;" align="center">
          <hr>
          <tr>
            <td>KODE {{ $kategori->nama_kategori }}</td>
            <th style="text-align: right;"><h5 style="color: #fff;">{{ generateSteamWalletCode() }}</h5></th>
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
          
        </table>
        
        <hr>
        <table style="text-align: left;" align="center">
          <tr>
          <td>Total Pembayaran</td>
            <th style="text-align: right;">RP. {{ number_format($model->total_harga, 0, "", ".") }}</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
  
  <h3 style="text-align: center; color: #383838;">Terima kasih telah topup voucher {{ $kategori->nama_kategori }} di VENTI </h3><br>
  <h3 style="text-align: center; color: #383838;">Semoga harimu menyenangkan</h3><br>

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