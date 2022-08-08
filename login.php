<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SaCode</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
  <body>

    <!-- start container -->
    <div class="conrainer">
      <div class="row mt-5">
        <div class="col-6 m-auto p-5 rounded shadow border">
          <form>
            
            <div class="text-center">
              <img class="mb-4" src="images/logo-sacode-meta.jpg" alt="Logo SaCode" width="120px;">
            </div>

            <div class="form-group mb-3">
              <div class="form-label text muted" for="alamat-email">Alamat email</div>
              <input type="email" name="" id="alamat-email" class="form-control form-control-lg py-3" placeholder="Alamat email">
            </div>

            <div class="form-group mb-3">
              <div class="form-label text muted" for="kata-sandi">Kata Sandi</div>
              <input type="email" id="kata-sandi" class="form-control form-control-lg py-3" placeholder="Kata Sandi">
              <small>
                <a href="#" class="link-secondary">Lupa Kata Sandi?</a>
              </small>
            </div>

            <div class="form-group mb-3">
              <label class="text-muted">
                <input type="checkbox" value="remeber-me">Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary py-3 fw-bold" type="submit">Login</button>

            <div class="mt-5 text-center">
              Belum punya akun? <a href="register.php" class="text-secondary">Register</a>
            </div>

          </form>
        </div>
      </div>
    </div>
    <br>
    <p class="text-center">@2022 developted by Elly</p>
 

  <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>