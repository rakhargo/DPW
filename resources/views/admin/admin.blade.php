<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>VENTI - Admin Page</title> 

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

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
                      {{-- <li><a href="tabVoucher">Our Shop</a></li> --}}
                      <li><a href="tabLacak">Lacak pesanan</a></li>
                      <li><a href="{{url('loginadm/logout')}}">Logout</a></li>
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
          <h3>Admin</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Admin Page</span>
        </div>
      </div>
    </div>
  </div>
  <div class="section trending">
    <div class="container">
        <h1>Table Kategori</h1> 
        <a href="{{url('kategori/create')}}" class="create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kategori</th>
                    <th>Logo</th>
                    <th>Laman Voucher</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php $noK = 1; ?>
            <tbody>
                @foreach ($listKategori as $kategori)
                <tr>
                    <td style="width: 5%;">{{ $noK }}</td>
                    <td style="width: 20%;">{{ $kategori->nama_kategori }}</td>
                    <td style="width: 10%;"><img src="{{ asset('storage/' .$kategori->gambar_kategori) }}"></td>
                    <td style="width: 20%;"><a class="btn btn-sm btn-primary"href="{{ url('voucherKategori/'.$kategori->id) }}">Vouchers</a></td>
                    <td style="width: 20%;">
                        <a class="btn btn-sm btn-primary" href="{{ url('kategoriEdit/'.$kategori->id.'')}}">Edit</a>
                        <form action="{{ url('kategori/'.$kategori->id) }}" method="POST">
                            @csrf <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $noK++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="section trending">
    <div class="container">
        <h1>Table Metode</h1> 
        <a href="{{url('metode/create')}}" class="create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 5%;">NO</th>
                    <th style="width: 20%;">Metode</th>
                    <th style="width: 10%;">Gambar</th>
                    <th style="width: 20%;">Biaya Admin</th>
                    <th style="width: 20%;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $noM = 1; ?>
                @foreach ($listMetode as $metode)
                <tr>
                    <td>{{ $noM }}</td>
                    <td>{{ $metode->nama_metode }}</td>
                    <td style="width: 10%;"><img src="{{ asset('storage/' .$metode->gambar_metode) }}"></td>
                    <td>RP. {{ number_format($metode->biaya_administrasi,0,"",".") }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ url('metodeEdit/'.$metode->id.'')}}">Edit</a>
                        <form action="{{ url('metode/'.$metode->id) }}" method="POST">
                            @csrf <input type="hidden" name="_method" value="DELETE" >
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $noM++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    <div class="section trending">
        <div class="container">
            <h1>Table Pesanan</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nomor Pesanan</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                        <th>Metode</th>
                        <th>Total Harga</th>
                        <th>Email Pelanggan</th>
                        <th>Waktu Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $noP = 1; ?>
                    @foreach ($listPesanan as $pesanan)
                    <tr>
                        <td>{{ $noP }}</td>
                        <td>INV-{{ $pesanan->id }}</td>
                        <td>{{ $pesanan->nama_kategori }}</td>
                        <td>{{ $pesanan->nominal_voucher }}</td>
                        <td>{{ $pesanan->nama_metode }}</td>
                        <td>RP. {{ number_format($pesanan->total_harga, 0, "", ".") }}</td>
                        <td>{{ $pesanan->email }}</td>
                        <td>{{ $pesanan->waktu_pesanan }}</td>
                    </tr>
                    <?php $noP++; ?>
                    @endforeach
                </tbody>
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