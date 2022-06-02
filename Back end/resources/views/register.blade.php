{{-- <form action="/register" method="post">
    @csrf
    <h2>Register</h2>
    <p>Username</p>
    <input type="text" name="username" id="username" placeholder="Enter Username">
    <p>Email</p>
    <input type="email" name="email" id="email" placeholder="Enter Email">
    <p>Password</p>
    <input type="password" name="password" id="password" placeholder="Enter Password">
    <input type="submit" name="register" value="Register">
</form> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
    <link rel="stylesheet" href="css/mystyle.css" />
    <script src="https://kit.fontawesome.com/23971600b0.js" crossorigin="anonymous"></script>
    <!-- Logo Title -->
    <link rel="icon" href="img/logo-garasiku.png" />
  </head>
  <body>
    <div>
      <div>
        <div class="logo">
          <img src="img/logo-garasiku.png" width="80px" alt="" />
        </div>
        <h5>Telusuri apa yang ingin kamu ketahui tentang otomotif</h5>
      </div>

      <div id="login-form-wrap">
        <h2 class="judul">Daftar sebagai anggota</h2>
        <form id="login-form" action="/register" method="post">
            @csrf
          <div>
            <label for="email">Email</label>
            <p>
              <input type="email" id="email" name="email" placeholder="Masukan email" required />
            </p>
          </div>

          <div>
            <label for="username">Username</label>
            <p>
              <input type="text" id="username" name="username" placeholder="Buat username" required />
            </p>
          </div>

          <div>
            <label for="password">Password</label>
            <p>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Kata Sandi Anda"
                {{-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" --}}
                required
              />
            </p>
          </div>

          <p>
            <input class="button-reg" type="submit" id="login" value="Daftar" />
          </p>
        </form>
      </div>
    </div>
  </body>
</html>