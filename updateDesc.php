<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['submitDesc'])){
    $desc = filter_input(INPUT_POST, "updateDesc");
    echo $desc;
    $user = $_SESSION['username'];
    echo $user;
    $sql = "UPDATE users SET description = ? WHERE username = ?";
    $stmt1 = $conn->prepare($sql);
    $stmt1->bind_param("ss",$desc,$user);
    if($stmt1->execute()){
     $_SESSION['msg'] = "Description updated successfully.";   
     header("Location: trainerIndex.php");
    }
    else{
        $_SESSION['msg'] = "Something went wrong";
    }
    
    
}

?>