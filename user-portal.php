<?php
  require_once('functions.php');
  db_connect();
  if(!isset($_SESSION['userId']))
  {
    redirect_to('index.php?loggedOut=true');
  }
  
?>
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
  <!-- Fontawesome Icons-->
  <link rel="stylesheet" href="assets/fontawesome-5.12.0/css/all.min.css" />

  <title>To-Do | <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']?></title>
</head>

<body>
  <audio id="logout" src="assets/audios/logout.mp3" autoplay="false"></audio>

  <nav class="navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand">To-Do | <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']?></a>
    <button onclick="logoutAlert();" class="btn btn-outline-warning my-2 my-sm-0" data-toggle="modal"
      data-target="#exampleModal"><i class="fas fa-power-off"></i></button>
  </nav>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to logout.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <a href="php/logout.php" type="button" class="btn btn-primary">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <div class="user-portal-title">
    <h1>To-Do</h1>
    <p>
      To Do is a task management app to help you stay organized and manage
      your day-to-day.
    </p>
  </div>
  <form action="php/addtask.php" method="POST">
    <div class="my-container">
      <div class="todo-list-container col-lg-5">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="task" placeholder="Enter the new task."
            aria-describedby="basic-addon2" required="required" />
          <div class="input-group-append">
            <button onclick="additem();" class="btn btn-success" id="basic-addon2">
              <i class="fas fa-plus"></i> Add Item
            </button>
          </div>
        </div>
        <?php
        $userId = $_SESSION['userId'];
        $sql = "SELECT taskid, task FROM tasks WHERE fromUser = $userId && taskDone = 0";
        $statement = $conn->query($sql);
        if($statement)
        {
          if($statement->num_rows>0)
          {
            while($task = $statement->fetch_assoc())
            {       
        ?>
        <div class="todo-list">
          <a href="php/taskdone.php?taskid=<?php echo $task['taskid'];?>"><i class="far fa-check-square"></i></a>
          <span class="task-text"><?php echo $task['task']; ?></span>
          <a class="delete" href="php/deletetask.php?taskid=<?php echo $task['taskid'];?>"><i
              class="fas fa-trash"></i></a>
        </div>
        <?php
            }
          }
          else
          {
        ?>
        <div class="no-task-message">
          No Tasks Found. Go ahead and add some task.
        </div>
        <?php
          }
        }
        ?>
      </div>
      <div class="done-list-container col-lg-5">
        <div class="done-list-title">
          <h2>Compleated Tasks</h2>
        </div>
        <?php
        $userId = $_SESSION['userId'];
        $sql = "SELECT taskid, task FROM tasks WHERE fromUser = $userId && taskDone = 1";
        $statement = $conn->query($sql);
        if($statement)
        {
          if($statement->num_rows>0)
          {
            while($task = $statement->fetch_assoc())
            {       
        ?>
        <div class="done-list">
          <a href="php/undotask.php?taskid=<?php echo $task['taskid'];?>"><i class="fas fa-undo-alt"></i></a>
          <span class="task-text"><?php echo $task['task']; ?></span>
          <a class="delete" href="php/deletetask.php?taskid=<?php echo $task['taskid'];?>"><i
              class="fas fa-trash"></i></a>
        </div>
        <?php
            }
          }
          else
          {
        ?>
        <div class="no-task-message">
          No Compleated Tasks Found.
        </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </form>
  <!-- Optional JavaScript -->
  <script>
    window.onload = function () {
      var sound = document.getElementById("logout");
      sound.play();
    }
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/jquery/jquery-3.5.1.slim.js"></script>
  <script src="assets/popper/popper.js"></script>
  <script src="assets/bootstrap-4.5.0/js/bootstrap.min.js"></script>
</body>

</html>