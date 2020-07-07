<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/bootstrap-4.5.0/css/bootstrap.min.css" />
  <!-- My Style -->
  <link rel="stylesheet" href="assets/style/mystyle.css" />
  <!-- Title Logo-->
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />

  <title>To-Do | Login</title>
</head>

<body>
  <div class="login-title">
    <h1>Welcome</h1>
    <p>
      To Do is a task management app to help you stay organized and manage
      your day-to-day.
    </p>
  </div>
  <div class="my-alerts">
  <?php
    if(isset($_GET['signup']))
    { 
  ?>
  <!--Logged out alert-->
  <div class="alert alert-success alert-dismissible fade show col-lg-7 mx-auto" role="alert">
    <strong>Account Created.</strong> Your TO-DO account have been successfully Created. Go ahead and Login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
    }
  ?>
  <?php
    if(isset($_GET['loggedOut']))
    { 
  ?>
  <!--Logged out alert-->
  <div class="alert alert-success alert-dismissible fade show col-lg-5 mx-auto" role="alert">
    <strong>Logged out.</strong> You have been successfully logged out.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
    }
  ?>
  <?php
    if(isset($_GET['loginFailed']))
    { 
  ?>
  <!--Auth error-->
  <div class="alert alert-danger alert-dismissible fade show col-lg-5 mx-auto" role="alert">
    <strong>Authentication ERROR.</strong> Email or Password is Incorrect.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
    }
  ?>
  </div>
  <!-- Login Form -->
  <div class="login-form">
    <form action="php/login.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          required="required" placeholder="Enter your Email Address" />
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="userPassword" class="form-control" id="exampleInputPassword1" required="required"
          placeholder="Enter your password" />
      </div>
      <div class="footer-buttons">
        <div class="login-submit">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="sign-up-button">
          <a href="sign-up.php">New to us Sign-up</a>
        </div>
      </div>
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/jquery/jquery-3.5.1.slim.js"></script>
  <script src="assets/popper/popper.js"></script>
  <script src="assets/bootstrap-4.5.0/js/bootstrap.min.js"></script>
</body>

</html>