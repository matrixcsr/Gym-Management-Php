<?php include 'dbconnect.php' ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update your trainer information</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
session_start();
$user = $_SESSION['username'];
$sql = "SELECT description FROM users WHERE username = ?";
$stmt1 = $conn->prepare($sql);
$stmt1->bind_param("s",$user);
$stmt1->execute();
$result = $stmt1->get_result();
while($row = $result->fetch_assoc()){
    $desc = $row['description'];
}
?>
<div class="container my-4">
<form action="updateDesc.php" method="post">
<div class="card">
  <h5 class="card-header">Hello <?php echo $_SESSION['username']; ?>, Update your trainer's description.</h5>
  <div class="card-body">
  <textarea class="form-control" id="exampleFormControlTextarea1" name="updateDesc" rows="6" cols="50">
<?php echo $desc; ?>
</textarea>
<br>
    <input type="submit" class="btn btn-primary" name="submitDesc" value="Update Description">
    <a href="logout.php" class="btn btn-dark">Logout</a>
  </div>
</div>
</form>    
<?php
if(isset($_SESSION['msg'])){
echo  '   <div class="alert alert-success" role="alert">';
echo  '  Description updated successfully.';
echo  ' </div>';
    unset($_SESSION['msg']);
}         
?>

</div>


  </body>
</html>


