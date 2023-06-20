<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .login-container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
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
      background-color: #4cacaf;
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
</body>
</html>