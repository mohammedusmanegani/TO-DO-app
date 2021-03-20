<?php
require_once('../functions.php');
db_connect();
$email = $_POST['userEmail'];
$password = $_POST['userPassword'];
$sql = "SELECT id, userFirstName, userLastName, userPassword FROM users WHERE userEmail = ?";
$statement = $conn->prepare($sql);
$statement->bind_param('s', $email);
if ($statement->execute()) {
    $statement->store_result();
    $statement->bind_result($id, $firstName, $lastName, $userPassword);
    $statement->fetch();
    if (strcmp($_POST['userPassword'], $userPassword) == 0) {
        $_SESSION['userId'] = $id;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        redirect_to('../user-portal.php');
    } else {
        redirect_to('../index.php?loginFailed=true');
    }
}
