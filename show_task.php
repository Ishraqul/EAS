<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet"/> 
  
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">391 Corporation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">SignIn & SignUp</a>
        </li>
       
        </li>
        <li class="nav-item">
          <a class="nav-link" href="face.php">Attendence</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="show_task.php">Task</a>
        </li>

    </div>
  </div>
</nav>
<div class="py-5">
    <h2 class="text-center">GIVEN TASK</h2>
  </div>
  <div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:  #ADD8E6;">
      <div class="row" style="padding:5px;" > 
        <div class="col-md-4"> <b> Seial ID </b> </div>
        <div class="col-md-4"> <b> Task Assigned To</b>  </div>
        <div class="col-md-4"> <b> Task Description</b> </div>    
      </div>

<?php 
      require_once("dbconnect.php");
      $sql = "SELECT * FROM task_info";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
        
      ?>
      <div class="row" style="padding:5px;"> 
        <div class="col-md-4">  <?php echo $row[0]; ?> </div>
        <div class="col-md-4">  <?php echo $row[1]; ?> </div>
        <div class="col-md-4">  <?php echo $row[2] ?> </div>    
     </div>
      
      
      <?php 
        }         
      }
      ?>
      </div>

      <div class= "text-center">
   <a href="submission.php" class="btn btn-success"> Submit Work </a>
 </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<head>
</body>
</html>