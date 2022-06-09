<?php include 'dbconnect.php'?>         
<?php
session_start();
if(!isset($_SESSION)) {
    $user =  $_SESSION["user"];
    $email = $_SESSION["email"];
    $pass =  $_SESSION["pass"];
    $id =  $_SESSION["id"];
} else {
  $user = $_POST['username'];
  $_SESSION["user"] = $user;
    $email = $_POST['email'];
    $_SESSION["email"] = $email;
    $pass = $_POST['password'];
    $_SESSION["pass"] = $pass;
}

    $sql = "SELECT password,user_id FROM users WHERE username= ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$_SESSION['username']);

    $stmt->execute();
    $result = $stmt->get_result();
    if($row = $result->fetch_assoc()) {   
        $id = $row['user_id'];            
        $_SESSION["id"] = $id;
        if(password_verify($pass,$row['password'])){                //First it checks if the password if correct or not
            $sql = "SELECT * FROM users WHERE username = ?";
            $stmt1 = $conn->prepare($sql);
            $stmt1->bind_param("s",$user);
            $stmt1->execute();
            $result = $stmt1->get_result();
            if($row = $result->fetch_assoc()){
                $_SESSION["uuser"] = "Username already exists";     //If user exists, it return an error message
                header("Location: updateUser.php");
            }
            else{
                $sql = "UPDATE users SET email= ?, username = ? WHERE user_id = ?";     //If the user does not exist it updates the information in database.
                $stmt1 = $conn->prepare($sql);
                $stmt1->bind_param("ssi",$email,$user,$id);
                $stmt1->execute();
                unset($_SESSION["user"]);
                unset($_SESSION["email"]);
                unset($_SESSION["pass"]);
                unset($_SESSION["id"]);
                $_SESSION["username"] = $user;
                $_SESSION["success"] = "User information updated succeffully";
                header("Location: profile.php");
            }

        }
        else{
            $_SESSION["uuser"] = "Incorrect Password";
            header("Location: updateUser.php");
        }
       
    }  
     else{
            echo "bruh";
        }  
?>