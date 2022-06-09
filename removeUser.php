<?php
include 'dbconnect.php';
$id = $_GET['data1'];

$sql = "DELETE FROM `users` WHERE `users`.`user_id` = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s",$id);
if($stmt->execute() == true){
    session_start();
    $_SESSION['infodel']   = 'User deleted successfully';
    header('Location: listofUsers.php');
}

?>