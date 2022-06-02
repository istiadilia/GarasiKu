{{-- <form action="/login" method="post">
    @csrf
    <h2>Login</h2>
    <p>Email</p>
    <input type="email" name="email" id="email" placeholder="Enter Email">
    <p>Password</p>
    <input type="password" name="password" id="password" placeholder="Enter Password">
    <input type="submit" name="login" value="Login">
</form> --}}

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href="css/mystyle.css">
      <script src="https://kit.fontawesome.com/23971600b0.js" crossorigin="anonymous"></script>
      <script defer src="/your-path-to-fontawesome/js/all.js"></script>
      
      <!-- Logo Title -->
    <link rel="icon" href="img/logo-garasiku.png" />
    
</head>

<body>
      <div>
           
            <div>
                  <div class="logo">
                        <img src="img/logo-garasiku.png" width="80px" alt="logo-garasiku">
                  </div>
                  <h5>Telusuri apa yang ingin kamu ketahui tentang otomotif</p>
            </div>
            
            <div id="login-form-wrap">
                  <h2>Masuk sebagai anggota</h2>
                  <form id="login-form" action="/login" method="post">
                    @csrf
                        <label for="email">Email</label>
                        <p>
                              <input type="email" id="email" name="email" placeholder="Email" required>
                        </p>
                        <label for="password">Password</label>
                        <p>
                              <input type="password" id="password" name="password" placeholder="Kata Sandi"  required>
                        </p>
                        <p>
                              <input class="log" type="submit" id="login" value="Masuk" name="login">
                        </p>
                        <!-- <p><a href="#">Lupa Kata Sandi?</a></p> -->
                  </form>

                  <div id="create-account-wrap">
                        <p class="belum">Belum memiliki akun? <a href="/register">Daftar</a>
                        <p>
                  </div>
                  <!--create-account-wrap-->
            </div>
            <!--login-form-wrap-->
            <!-- partial -->
      
      </div>
      
</body>

</html>