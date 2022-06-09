<?php include 'navbar.php'?>
<?php 
if(!isset($_COOKIE['user'])) {        //Cookie that places value in "username" input field if user has selected "remember me".
  $user1 = "";
} else {
  $user1 = $_COOKIE['user'];         
}
?>
<?php
if(isset($_SESSION["username"])){     //Prevents user from accessing the page if user has already logged in.
  header("Location: index.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <style>
                    #c2 {
            background: #969696;
            width: 25%;
            height: 100vh;
            float: right;
        }
        #c1{
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div id="c1">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/1600x1100/?Fitness" class="d-block w-100" alt="img1"> <!-- Carousel with automatic panning with fade effect -->
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x1100/?Fitness,health" class="d-block w-100" alt="img2"> <!-- Using Unplash api for getting images -->
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x1100/?Fitness,atheletics" class="d-block w-100" alt="img3">
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
            <form method="post" action="verifylogin.php">
                <div class="mb-3">    <!-- Form for colelcting user data -->
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" value="<?php echo $user1; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" value="1" class="form-check-input" id="exampleCheck1" checked>
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <input type="submit" name="login" class="btn btn-primary"><br>
                <?php 
                if(isset($_SESSION['error'])){
                  echo $_SESSION['error'];        //Prints error message if username or password is incorrect.
                  unset($_SESSION['error']);
                }
                ?>
            </form>
        </div>
    </div>

  </body>
</html>