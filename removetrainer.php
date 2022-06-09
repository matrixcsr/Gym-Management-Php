<?php
include 'dbconnect.php';
$id = $_GET['data1'];

$sql = "DELETE FROM `users` WHERE `users`.`user_id` = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s",$id);
if($stmt->execute() == true){
    header('Location: listofTrainer.php');
}

?>