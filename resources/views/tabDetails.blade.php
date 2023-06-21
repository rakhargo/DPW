<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logoonly.png">
    <title>VENTI - Beli Voucher</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
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
                        <img src="/assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/">Home</a></li>
                      {{-- <li><a href="tabVoucher">Our Shop</a></li> --}}
                      <li><a href="{{url('tabLacak')}}">Lacak pesanan</a></li>
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
          <h3>Beli Voucher</h3>
        </div>
      </div>
    </div>
  </div>

  <form action="{{ url('tabConfirm') }}" method="post" id="orderForm">
    @csrf
    <div class="single-product section">
      <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <div class="left-image">
                <img src="{{ asset('storage/' .$datas['condition']->gambar_kategori) }}" alt="">
              </div>
              <br>
              <h2>{{ $datas['condition']->nama_kategori }} - Indonesia</h2>
              <p align="justify" style="padding-right: 80px;">
                Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Pulsa akan dikenakan biaya tambahan pajak.
                <br><br>Beli {{ $datas['condition']->nama_kategori }} hanya dalam hitungan detik! Cukup masukan jumlah saldo {{ $datas['condition']->nama_kategori }} yang Anda inginkan, pilih metode pembayaran dan selesaikan transaksi Anda. Kemudian Anda akan mendapatkan {{ $datas['condition']->nama_kategori }} pada pesan konfirmasi pembayaran via email.
              </p>
            </div>
            <input type="hidden" name="id_kategori" value="{{ $datas['condition']->id }}">

            <div class="col-lg-6" >

              <h4>1. Pilih nominal Voucher</h4>
              <div id="plant" class="product" style="padding:20px;">
                <section id="produk">
                  <div class="row gx-5" >
                  @foreach ($datas['join'] as $datajoin)
                  <div class="col-4">
                  <div class="item">
                    <div class="thumb">
                        <h6 class="nama_produk" style="color: #fff;">{{ $datajoin->nominal_voucher }}</h6>
                        <img src="{{ asset('storage/'.$datajoin->gambar_kategori)  }}" style="aspect-ration: 1 / 1; width:100%; " alt="">
                        <input type="radio" id="{{ $datajoin->nominal_voucher }}" value="{{ $datajoin->id . '|' . $datajoin->harga_voucher }}" name="voucher" required>
                        
                        <label for="{{ $datajoin->nominal_voucher }}">
                            <h6 class="nama_produk">RP. {{ number_format($datajoin->harga_voucher,0,"",".") }}</h6>
                          </label>
                        </div>
                      </div>
                      </div>
                      @endforeach
                    </div>
                  </section>
              </div>
              
              <h4>2. Pilih Metode pembayaran</h4>
              <div id="plant" class="product" style="padding:20px;">
                <section id="produk">
                  <div class="row gx-5" >
                  @foreach ($datas['metode'] as $datametode)
                  <div class="col-4">
                  <div class="item">
                    <div class="thumb">
                        <h6 class="nama_produk" style="color: #fff;">{{ $datametode->nama_metode }}</h6>
                        <img src="{{ asset('storage/'.$datametode->gambar_metode)  }}" style="aspect-ration: 1 / 1; width:100%; " alt="">
                        <input type="radio" id="{{ $datametode->id }}" value="{{ $datametode->id . '|' . $datametode->biaya_administrasi }}" name="metode" required>
                        
                        <label for="{{ $datametode->id }}">
                            <h6 class="nama_produk">RP. {{ number_format($datametode->biaya_administrasi,0,"",".") }}</h6>
                          </label>
                        </div>
                      </div>
                      </div>
                      @endforeach
                    </div>
                  </section>
              </div>

            <div class="col-lg-6" >
              <h4>3. Masukkan Email</h4>
                <div class="row">
                  <div class="col-3">
                    <div class="item" style="width: 1000%; padding-top: 10px; margin-left: 20px;">
                      <div class="thumb">
                          <input type="email" name="email"class="form-control" placeholder="name@example.com" required>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>
                
                <button type="submit" id="submitBtn" class="submit-btn">Konfirmasi Topup <i class="bi-arrow-right-circle"></i></button>
            </div>            
          </div>
        </div>
      </div>
    </form>


    <footer>
      <div class="container">
        <div class="col-lg-12">
          <p>Coded by: <a href="mailto:@upi.edu" style="color: blue">Jason Suryoatmojo</a> & <a href="mailto:rakhadh@upi.edu" style="color: blue">Rakha Dhifiargo</a> <br>Kontak kami lewat tulisan biru diatas</p>
        </div>
      </div>
    </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/isotope.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/counter.js"></script>
  <script src="/assets/js/custom.js"></script>
  <script src="/assets/js/script.js"></script>

  </body>
</html>