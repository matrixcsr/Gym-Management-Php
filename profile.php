<?php include 'navbar.php'?>
<!doctype html>
<html lang="en">      <!--This page will display all the userinfo for the logged in user-->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .cen {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}
    </style>

    <title>User profile</title>
  </head>
  <body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <?php 
    if(isset($_SESSION["username"])){
       include 'dbconnect.php';        
    $id = null;
    $sql = "SELECT user_id,username,email,isMember FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$_SESSION['username']);

    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()){
        $id = $row['user_id'];
 echo  '        <div class="cen">';
 echo  '        <div class="container overflow-hidden">';
 echo  '<div class="row gy-5">';
 echo  '<div class="col-6">';
 echo  '    <div class="p-3 border bg-light">User_id: '.$row['user_id'].'</div>';
 echo  '</div>';
 echo  '<div class="col-6">';
 echo  '    <div class="p-3 border bg-light">Username: '.$row['username'].'</div>';
 echo  '</div>';
 echo  '<div class="col-6">';
 echo  '    <div class="p-3 border bg-light">Contact email: '.$row['email'].'</div>';
 echo  '</div>';
 echo  '<div class="col-6">';
 if($row['isMember'] == 1){   
    echo  '    <div class="p-3 border bg-light">Membership: <font color="green">Member </font></div>';
            }
else{
      echo  '    <div class="p-3 border bg-light">Membership: <font color="red">Non-Member</font></div>';
            }
 echo  '</div>';
 echo  '</div>';
 echo  '</div>';
 echo  '</div>';
echo       '<div class="cen">';
echo       '  <div class="container px-4">';
echo         '<div class="row gx-5">';
echo           '<div class="col">';
echo           '<div class="p-3"></div>';
echo           '</div>';
echo           '<div class="col">';
echo           '    <form action="updateUser.php" method="post">';
echo           '    <div class="p-3">';
echo           '    <button name="update" value="'. $id .'">Update Info</button>      <!-- links to the page where user can update info-->';
echo           '    </div>';
echo           '    </form>';            
echo       '    </div>';
echo       '  </div>';
echo       '</div>';
echo       '    </div>';



    }
    if(isset($_SESSION["success"])){
      echo $_SESSION["success"];       
      unset($_SESSION["success"]);
    }
}
else{
  echo "Wait, I do not recognise you. Why don't you sign in and check back again :) ";
}
   
    ?>
  

  </body>
</html>

