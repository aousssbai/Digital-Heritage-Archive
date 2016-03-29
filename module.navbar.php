<?php


$baseURL = "http://localhost:8888";

?>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsablePart" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $baseURL.'/';?>welcome.php"><p> Home</p></a>

    </div>

      <div class="collapse navbar-collapse" id="collapsablePart">

      <?php 
        if(isLogged()) {
            $user = $_SESSION['user'];
            ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $baseURL.'/index.php';?>">project page <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
            <li><a href="<?php echo $baseURL.'/';?>addition.php"> Submit a project <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            <li><a href="<?php echo $baseURL.'/';?>edit-change.php"> edit a project <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            <li><a href="<?php echo $baseURL.'/logout.php';?>">Log Out <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>

          </ul>
          <?php
        } else {
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php">Register</a></li>
          </ul>
          <?php
        }
      ?>
      </div>
  </div>
</nav>