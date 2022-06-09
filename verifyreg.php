<?php include 'dbconnect.php'?> <!-- Connects to db -->

<?php
if(isset($_POST['register'])){                          //Checks if user pressed the register button
    if(!empty($_POST['email'])){                        //checks if user entered email or not
        $email = filter_input(INPUT_POST, "email");     //sanitizing input
    $user = filter_input(INPUT_POST, "username");
    $pass =filter_input(INPUT_POST, "password");

    if(empty($pass) || strlen($pass)<8){                //password validation
        session_start();
         $_SESSION['error']   = 'Password must be atleast 8 characters';
         header("Location: register.php");
    }
    else{

        $sql = "SELECT username FROM users WHERE username= ?";  //method to check if another username is already having the username.
    
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        if($row = $result->fetch_assoc() == true) {
            session_start();
             $_SESSION['error']   = 'Username already taken';   //If the username is taken, user will be send back to register again.
             header("Location: register.php");
        }
        else{
            $hashPWD = password_hash($pass, PASSWORD_DEFAULT);      //hashing password
            $sql = "INSERT INTO `users`(username,password,email) VALUES (?,?,?)";
            $stmt1 = $conn->prepare($sql);
    
            $stmt1->bind_param("sss", $user,$hashPWD,$email);
            if($stmt1->execute() == true){
                include 'mail.php';                             //If the user is registered inside db, a mail will be sent to registered email id.
                header('Location: login.php');                  //User will be redirected to login page.
            }
        }
    }

    }

}
?>
