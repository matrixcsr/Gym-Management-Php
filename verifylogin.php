<?php include 'dbconnect.php'?>   <!-- Connecting with db -->
<?php
if(isset($_POST['login'])){     //Checking is submit button was pressed
  session_start();              //Starting session
  echo "inside login";          //debug code used while error testing, user won't see it.
    echo $_POST['username'];  
    if(isset($_POST['remember'])){      //Sets a cookie, so when user logs out, the user name will already be in username field.
    $cookie_name = "user";
    $cookie_value = $_POST['username'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }
    $user = filter_input(INPUT_POST, "username");
    $pass = filter_input(INPUT_POST, "password");
    
    $sql = "SELECT username,role,password FROM users WHERE username= ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s",$user);
   
    $stmt->execute();
   
    $result = $stmt->get_result();
    if($row = $result->fetch_assoc()) {  
      if(password_verify($pass,$row['password'])){   //Checking the login password and comparing it with hashed data inside db.
        session_start();
        $_SESSION["username"] = $row["username"];   //Setting up session if password verifies.
        if($row["role"] == "3"){
          header("Location: adminIndex.php"); //If the username has the role 3, user is an admin and will be redirected to the admin page.
        }
        else if($row["role"] == "1"){
          header("Location: trainerIndex.php"); //If the username has the role 1, user is a trainer.
        }
        else{
          header("Location: index.php");    //else the regualr user will be redirected to index.
        }
        
      }
      else{
        header("Location: login.php");    //if the password does not check out, error will be displayed on login screen using cookies.
        $_SESSION['error']   = 'Username or Password incorrect';
      }
      }
      else{
        header("Location: login.php");
      }     
}
else{
  echo "bruh";    //debug.
}
?>