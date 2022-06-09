<?php include 'navbar.php' ?>
<?php $var_value = ""; ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Register</title>
  <style>
    #c2 {
      background: #969696;
      width: 25%;
      height: 100vh;
      float: right;
    }

    #c1 {
      background: black;
      float: left;
      height: 100vh;
      width: 75%;
    }

    #center {
      margin: auto;
      width: 80%;
      padding: 60% 0;
    }
  </style>
</head>

<body>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <div id="c1">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <!-- Carousel with automatic panning with fade effect -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1600x1100/?Fitness" class="d-block w-100" alt="bruh"> <!-- Using Unplash api for getting images -->
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1600x1100/?Fitness,health" class="d-block w-100" alt="bruh">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1600x1100/?Fitness,atheletics" class="d-block w-100" alt="bruh">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div id="c2">
    <div id="center">
      <form method="post" action="verifyreg.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label> <!-- Form that collects register info -->
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">username</label>
          <input type="text" class="form-control" name="username" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="register" class="btn btn-primary">Submit</button>
      </form>
      <?php
      if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];        //Prints error message if username or password is incorrect.
        unset($_SESSION['error']);
      }
      ?>
    </div>
  </div>





</body>

</html>