<?php include 'dbconnect.php'?>
<?php include 'navbar.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <style>

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>All Users</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <div class="container">
    <?php 
    if(isset($_SESSION["username"])){
      if($_SESSION["username"] == 'admin'){
         $role = "0";
        $sql = "SELECT user_id,username,email,isMember FROM users WHERE role = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$role);
        $stmt->execute();
        $result = $stmt->get_result();
        echo "<table class='table table-light table-hover'>";                                 
echo      "  <thead>";
echo      "  <tr>";
echo      "    <th scope='col'>#</th>";
echo      "    <th scope='col'>Username</th>";
echo      "    <th scope='col'>email</th>";
echo      "    <th scope='col'>Member Status</th>";
echo      "<td colspan='2' align='center'> <b>Action</b> </td>";
echo      "  </tr>";
echo      "</thead>";
echo " <tbody>";
        while($row = $result->fetch_assoc()){

            echo "<tr>";                              //Displaying the data from db in a table format.
            echo "<th scope='row'>". $row['user_id']." </th>";
            echo "<td>". $row['username']. "</td>";        
            echo "<td>". $row['email'] . "</td>";
            if($row['isMember'] == "0"){
                echo "<td> Non-Member </td>";
            }
            else{
                echo "<td> Member </td>";
            }
            echo "<td> <a href='removeMem.php?data1=".$row['user_id']."'>Update Membership</a> </td>"; //Changes the membership status of the user.
            echo "<td> <a href='removeUser.php?data1=".$row['user_id']."'>Remove User</a> </td>";      //Deletes the user comepletely.
        }
        echo "</tbody>";
         echo "</table>"
        ?>
                  <?php 
                if(isset($_SESSION['infodel'])){
                  echo $_SESSION['infodel'];        //Prints error message if username or password is incorrect.
                  unset($_SESSION['infodel']);
                }
                if(isset($_SESSION['infomem'])){
                  echo $_SESSION['infomem'];        //Prints error message if username or password is incorrect.
                  unset($_SESSION['infomem']);
                }
    }
    else{
      echo "You are not authorised to perform this action";
      echo "<a href='index.php'> Go back";
    }
  }    
?>
</div>
  </body>
</html>