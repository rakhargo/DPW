<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/logoonly.png">
  <title>VENTI - Index</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <style>


    .login-container {
      width: 300px;
      margin-top: 7%;
      margin-left: 37%;
      padding: 20px;
      background-color: #383838;
      border: 1px solid #ccc;
      border-radius: 25px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #fff;
    }

    .login-container input[type="text"],
    .login-container input[type="email"],
    .login-container input[type="password"] {
      width: 92%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #ee626b;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-container input[type="submit"]:hover {
      background-color: #77bbc7;
    }
  </style>
 
</head>
<body>

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <ul class="nav">
                      <li><a href="/">Home</a></li>

                      <li><a href="tabLacak">Lacak pesanan</a></li>
                      <li><a href="loginadm">Admin page</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Login as Admin</h3>
          {{-- <span class="breadcrumb"><a href="#">Home</a>  >  Contact Us</span> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="login-container">
    <h2>Login</h2>
    <form action="{{ url('loginadm/login')   }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" value="{{ Session::get('email') }}"name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Log In">
    </form>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Coded by: Jason Suryoatmojo & Rakha Hariadi</p>
      </div>
    </div>
  </footer>
</body>
</html>