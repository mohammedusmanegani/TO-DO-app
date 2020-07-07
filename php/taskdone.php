<?php
    require_once('../functions.php');
    db_connect();
    $sql = "UPDATE tasks
            SET taskDone = 1
            WHERE taskid = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s',$_GET['taskid']);
    $statement->execute();
    redirect_to('../user-portal.php');
?>