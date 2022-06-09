<?php include 'navbar.php'?>
<?php include 'dbconnect.php'?>
<?php
$email = null;
if(!isset($_SESSION['idsess'])){
  $id = $_POST['update'];
  $_SESSION["idsess"] = $id;
}
else{
  
  $id = $_SESSION['idsess'];
}


$sql = "SELECT * FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);


$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()){
    $user = $row['username'];
    $email = $row['email'];
    $id = $row['user_id'];
}

?>
<!doctype html>
<html lang="en">      <!-- Form which will collect new user info -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Account information</title>
  </head>
  <body>
    <div class="container">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <form method="POST" action="UpdateVerify.php">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User_Id</label>
        <input class="form-control" name="id" id="disabledInput" type="text" value="<?php echo $id; ?>" placeholder="<?php echo $id; ?>" disabled>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" value="<?php echo  $email?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="username" name="username" class="form-control" value="<?php echo $user; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" placeholder="Enter your password to make changes" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php 
                if(isset($_SESSION["uuser"])){
                  echo $_SESSION["uuser"];        //Prints error message if username or password is incorrect.
                  unset($_SESSION["uuser"]);
                }
                ?>

      </div>
    

  </body>
</html>