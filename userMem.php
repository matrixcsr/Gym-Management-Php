<?php include 'dbconnect.php'?>
<?php include 'navbar.php'?>
<?php
if(isset($_POST['submit'])){
    if(isset($_SESSION['username'])){
        $sql = "SELECT isMember FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$_SESSION['username']);
   
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){
            if($row['isMember'] == 0){
                $sql = "UPDATE `users` SET `isMember` = '1' WHERE `users`.`username` = ?";
                $stmt1 = $conn->prepare($sql);
                $stmt1->bind_param("s",$_SESSION['username']);
                    if($stmt1->execute() == true){
                        header("Location: index.php");
                    }
                    else{
                        echo "Something went wrong";
                    }
            }
            else{
                echo "Already a member<br>";
                echo "Go back to <a href='index.php'>home page?</a>";
            }
            
        }
        
    }
}

?>