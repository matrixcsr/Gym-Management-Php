<?php include 'navbar.php' ?>
<?php include 'dbconnect.php'?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Trainers</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="container my-4">
      <?php 
      $role = 1;
      $count = 1;
      $sql = "SELECT * FROM users WHERE role = ?";
      $stmt = $conn->prepare($sql);
          $stmt->bind_param("i",$role);
          $stmt->execute();
          $result = $stmt->get_result();
          while($row = $result->fetch_assoc()){
  echo            '<div class="card mb-3" style="max-width: 540px;">';
  echo  '<div class="row g-0">';
  echo    '<div class="col-md-4">';
  echo      '<img src="'.$count.'.jpg" class="img-fluid rounded-start" alt="...">';
  echo    '</div>';
  echo   ' <div class="col-md-8">';
  echo      '<div class="card-body">';
  echo        '<h5 class="card-title">'.$row['username'].'</h5>';
  echo        '<p class="card-text">'.$row['description'].'</p>';
  echo    '      </div>';
  echo    '    </div>';
  echo    '  </div>';
  echo    '</div>';
  $count++;
          }

      ?>
    </div>


  </body>
</html>