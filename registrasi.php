


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- my CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Registrasi</title>
  </head>
  <body class="bg-primary">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 bg-white p-5 shadow-lg my-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Halaman Registrasi</h1>
          </div>
          <form class="user" action="" method="POST">
            <div class="form-group">
              <div class="mb-3">
                <input type="text" class="form-control form-control-user" id="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap" name="nama_lengkap" />
              </div>
            </div>
            <div class="form-group">
              <div class="mb-3">
                <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Username" name="username" required/>
              </div>
            </div>
            <div class="form-group">
              <div class="mb-3">
                <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" />
              </div>
            </div>
            <div class="form-group row">
              <div class="mb-3 col-sm-6 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" />
              </div>
              <div class="mb-3 col-sm-6 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password2" placeholder="Konfirmasi Password" name="password2" />
              </div>
            </div>

            <button type="submit" class="btn btn-primary  btn-user btn-block" name="daftar">Daftar</button>
            <div class="text-center">
              <a class="small" href="login.php">Already have an account? Login!</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
