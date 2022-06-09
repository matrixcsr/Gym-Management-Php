<?php include 'dbconnect.php'?>

<?php 
        $id = $_GET['data1'];
        $sql = "SELECT isMember FROM users WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);
   
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){                             //Changes the membership status of the user
            if($row['isMember'] == 0){          
                $sql = "UPDATE `users` SET `isMember` = '1' WHERE `users`.`user_id` = ?";
            }
            else{
                $sql = "UPDATE `users` SET `isMember` = '0' WHERE `users`.`user_id` = ?";
            }
        }
        
        $stmt1 = $conn->prepare($sql);

         $stmt1->bind_param("s",$id);
        if($stmt1->execute() == true){
            session_start();
            $_SESSION['infomem']   = 'Membership status changed!';
            header("Location: listofUsers.php");
        }
        

?>