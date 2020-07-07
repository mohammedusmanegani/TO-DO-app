<?php
    require_once('../functions.php');
    db_connect();
    $sql = "INSERT INTO tasks (task,fromUser,taskDone) VALUES (?, ?, ?);";
    $statement = $conn->prepare($sql);
    $compleated = 0;
    $statement->bind_param('sss',$_POST['task'],$_SESSION['userId'],$compleated);
    if($statement->execute())
    {
        redirect_to('../user-portal.php');
    }
    else
    {
        die("There has been an error, please try again after some time");
    }
?>