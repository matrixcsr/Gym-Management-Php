<?php 
session_start();
unset($_SESSION['username']);           //Unsets the session and redirects back to the login page.
session_destroy();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

?>