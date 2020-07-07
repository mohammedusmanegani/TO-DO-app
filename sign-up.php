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

  <title>To-Do | Sign-up</title>
</head>

<body>
  <div class="signup-title">
    <h1>Welcome</h1>
    <p>
      To Do is a task management app to help you stay organized and manage
      your day-to-day.
    </p>
  </div>

  <!-- Login Form -->
  <div class="signup-form">
    <form action="php/signup.php" method="POST">
      <div class="form-row">
        <div class="form-group col-lg-6">
          <label for="firstname">First Name</label>
          <input type="text" name="userFirstName" class="form-control" id="firstname" required="required"
            placeholder="Enter your first name" />
        </div>
        <div class="form-group col-lg-6">
          <label for="lastname">Last Name</label>
          <input type="text" name="userLastName" class="form-control" id="lastname" required="required"
            placeholder="Enter your last name" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-lg-12">
          <label for="email">Email address</label>
          <input type="text" name="userEmail" class="form-control" id="email" required="required"
            aria-describedby="emailHelp" placeholder="Enter your email address" />
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-lg-12">
          <label for="password">Password</label>
          <input type="password" name="userPassword" class="form-control" id="password" required="required"
            placeholder="Enter your Password" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-lg-12">
          <label for="profession">Profession</label>
          <input type="text" name="userProfession" class="form-control" id="profession" required="required"
            placeholder="Enter your profession (Student, teacher, Doctor)" />
        </div>
      </div>
      <div class="footer-buttons">
        <div class="login-submit">
          <button type="submit" class="btn btn-primary">Sign-up</button>
        </div>
        <div class="sign-up-button">
          <a href="index.php">Already have an account Login</a>
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