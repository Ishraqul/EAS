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
<body>
  <div class="py-5">
    <h2 class="text-center">Admin Login</h2>
  </div>
</body>
<div class="w-50 m-auto">
  <form action="admin_info.php" method="post">
    <div class= "form-group">
    </div>
    <div class= "form-group">
      <label >Admin Name</label>
      <input type="text" name="Name" autocomplete="off" class="form-control">
    </div>
    <div class= "form-group">
      <label >Admin Password</label>
      <input type="text" name="Password" autocomplete="off" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Login</button>
</div>
</form>
</div>
</body>
</head>
</html>