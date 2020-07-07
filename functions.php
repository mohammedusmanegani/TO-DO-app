<?php
    session_start();
    
    date_default_timezone_set('Asia/Kolkata');
    function db_connect() {
      global $conn; // db connection variable
      $db_server = "localhost";
      $username = "root";
      $password = "";
      $db_name = "todoapp";
      // create a connection
      $conn = new mysqli($db_server, $username, $password, $db_name);
  
      // check connection for errors
      if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
      }
    }
  
    function redirect_to($url) {
      header("Location: " . $url);
      exit();
    }
?>