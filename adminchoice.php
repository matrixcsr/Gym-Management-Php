<?php 

$choice = $_POST['choice'];

if($choice == 'users')
{
    header('Location: listofUsers.php');
}
else if($choice == 'trainers'){
    header('Location: listofTrainer.php');
}

?>