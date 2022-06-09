<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="favicon.png">

  </head>
  <body>
    <?php                                     //Dynamic Navbar which changes according to the user role and login status.
    if(isset($_SESSION["username"])){
      if($_SESSION["username"] == 'admin'){     //Admin navbar
        echo   ' <nav class="navbar navbar-expand-lg navbar-dark bg-dark">';
        echo  '<div class="container-fluid">';
        echo   '<a class="navbar-brand" href="adminIndex.php">GymFreaks</a>';
        echo  ' <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
        echo   '  <span class="navbar-toggler-icon"></span>';
        echo '  </button>';
        echo  '<div class="collapse navbar-collapse" id="navbarNav">';
        echo    '<ul class="navbar-nav">';
        echo       '<li class="nav-item">';
        echo        '<a class="nav-link active" aria-current="page" href="">Logged in as Admin</a>';
        echo      '</li>';
        echo       '<li class="nav-item">';
        echo         '<a class="nav-link" href="listofUsers.php">Show all users</a>';
        echo       '</li>';
        echo       '<li class="nav-item">';
        echo         '<a class="nav-link" href="listofTrainer.php">Show all Trainers</a>';
        echo       '</li>';
        echo       '<li class="nav-item">';
        echo       '  <a class="nav-link" href="logout.php">Logout</a>';
        echo'        </li>';
        echo'      </ul>';
        echo'    </div>';
        echo'  </div>';
        echo'</nav>';
      }
      else{       //normal user Navbar
              echo   ' <nav class="navbar navbar-expand-lg navbar-light bg-light">';
      echo  '<div class="container-fluid">';
      echo   '<a class="navbar-brand" href="index.php">GymFreaks</a>';
      echo  ' <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
      echo   '  <span class="navbar-toggler-icon"></span>';
      echo '  </button>';
      echo  '<div class="collapse navbar-collapse" id="navbarNav">';
      echo    '<ul class="navbar-nav">';
      echo       '<li class="nav-item">';
      echo        '<a class="nav-link active" aria-current="page" href="profile.php">'.$_SESSION['username'].'</a>';
      echo      '</li>';
      echo       '<li class="nav-item">';
      echo         '<a class="nav-link" href="pricing.php">Pricing</a>';
      echo       '</li>';
      echo       '<li class="nav-item">';
      echo       '  <a class="nav-link" href="logout.php">Logout</a>';
      echo'        </li>';
      echo       '<li class="nav-item">';
      echo       '  <a class="nav-link" href="trainers.php">Trainers</a>';
      echo'        </li>';
      echo'      </ul>';
      echo'    </div>';
      echo'  </div>';
      echo'</nav>';
      }

    }
else{             //for loginless user
  echo    '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
  echo '<div class="container-fluid">';
   echo  '<a class="navbar-brand" href="#">GymFreaks</a>';
 echo'    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
  echo    ' <span class="navbar-toggler-icon"></span>';
 echo'    </button>';
   echo  '<div class="collapse navbar-collapse" id="navbarNav">';
   echo   ' <ul class="navbar-nav">';
  echo       '<li class="nav-item">';
  echo      ' <a class="nav-link active" aria-current="page" href="index.php">Home</a>';
  echo     ' </li>';
  echo      '<li class="nav-item">';
  echo        ' <a class="nav-link" href="login.php">Login</a>';
  echo       '</li>';
  echo      '<li class="nav-item">';
  echo        '<a class="nav-link" href="register.php">Register</a>';
  echo      '</li>';
  echo  ' </ul>';
  echo  '</div>';
  echo '</div>';
  echo'</nav>';
}

?>

  </body>
</html>


