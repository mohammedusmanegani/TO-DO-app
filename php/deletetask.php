<?php
    require_once('../functions.php');
    db_connect();
    $sql = "DELETE FROM tasks WHERE taskid=?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s',$_GET['taskid']);
    if($statement->execute())
    {
        redirect_to('../user-portal.php');
    }
    else
    {
        echo $conn->error;
    }