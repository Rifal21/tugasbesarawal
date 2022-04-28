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

    <title>Login</title>
  </head>
  <body class="bg-primary">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 bg-white p-5 shadow-lg my-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Halaman login</h1>
          </div>
          <form class="user">
            <div class="mb-3">
              <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Username or Email" name="username" />
            </div>
            <div class="mb-3">
              <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" />
            </div>
            <!-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" />
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="registrasi.php">Create an Account!</a>
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
