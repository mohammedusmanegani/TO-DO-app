<?php
    require_once('../functions.php');
    db_connect();
    $sql = "INSERT INTO users (userFirstName, userLastName, userEmail, userPassword, userProfession) VALUES (?, ?, ?, ?, ?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param('sssss',$_POST['userFirstName'],$_POST['userLastName'],$_POST['userEmail'],$_POST['userPassword'],$_POST['userProfession']);
    
    if($statement->execute())
    {
        redirect_to('../index.php?signup=true');
    }
    else
    {
        die($conn->error);
    }
?>