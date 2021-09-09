<?php

session_start();
?>

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
    <h2 class="text-center" style="font-size:75px">Welcome To 391 Corporation</h2>
  </div>
  <div class= "text-center">
    <p style="font-size:25px"> Attendence </p>
  </div>
  <p></p>
  <div class="text-center">
   <a href="face.html" class="btn btn-success">Face Detection</a>
 </div>
<div>
  <p></p>
</div>
 <div class= "text-center">
    <p style="font-size:25px"> Task For The Day </p>
  </div>
  <div class= "text-center">
   <a href="show_task.php" class="btn btn-success">To-Do List</a>
 </div>
<div>
  <p></p>
</div>
<div class= "text-center">
    <p style="font-size:25px"> ADMIN </p>
  </div>
<div class= "text-center">
   <a href="admin.php" class="btn btn-success">Admin</a>
 </div>
<div>
  <p></p>
</div>

</body>
</head>
</html>