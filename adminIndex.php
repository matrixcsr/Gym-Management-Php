<?php include 'navbar.php'?> <!-- Dynamic Navbar for admin -->
<html>
    <head>
     
          <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>
        Admin Panel
    </title>
    <style>
                #center {
            margin: auto;
            width: 50%;
            height: 100%
            padding: 60% 0;
        }
    </style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container">
      <?php 
    if(isset($_SESSION["username"])){
        if($_SESSION["username"] == 'admin'){       //The content is only diplayed if the user is admin.
                   echo        '<p>Welcome to the admin panel!</p>';
  echo     'Use the Navbar or the following buttons to navigate and perform the desired action.';
  echo '<form action="adminchoice.php" method="post">';
  echo '<div id="center">';
echo  '<div class="card text-center">';

echo  '<div class="card-header">';
echo   ' Admin Controls';
echo  '</div>';
echo ' <div class="card-body">';
echo  '  <p class="card-text">Select any of the following.</p>';
echo   ' <a href="listofUsers.php" class="btn btn-primary">Show Users</a><br><br>';     //Admin controls.
echo   ' <a href="listofTrainer.php" class="btn btn-primary">Show Trainers</a>';
echo   ' </div>';

  echo  '</form>';
        }
        else{
                echo "You are not authorised to perform this action";       //Unathorised user will be asked to leave.
                echo "<a href='index.php'> Go back";
            }
    }
    
    ?>

</div>
  

    </body>
</html>