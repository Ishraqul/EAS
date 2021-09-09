<?php
  include 'dbconnect.php';
  session_start();
  error_reporting(0);


// Signup
  if(isset($_POST['signup'])){
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $Password = mysqli_real_escape_string($conn, md5($_POST["Password"]));
    $CPassword = mysqli_real_escape_string($conn, md5($_POST["CPassword"]));
    $Phone = mysqli_real_escape_string($conn, $_POST["Phone"]);
    $Position = mysqli_real_escape_string($conn, $_POST["Position"]);

    $check_Email= mysqli_num_rows(mysqli_query($conn, "SELECT Email FROM employee_info WHERE Email = '$Email'"));

    if ($Password !== $CPassword) {
    echo "<script>alert('Password did not match.');</script>";
  } elseif($check_Email > 0){
    echo "<script>alert('Email exists already.');</script>";
  }else{
    $sql = "INSERT INTO employee_info (Name,Email,Password,Phone,Position) VALUES ('$Name','$Email','$Password','$Phone','$Position')";
    $result= mysqli_query($conn, $sql);
    if($result){
      $_POST["Name"]="";
      $_POST["Email"]="";
      $_POST["Password"]="";
      $_POST["CPassword"]="";
      $_POST["Phone"]="";
      $_POST["Position"]="";
      echo "<script>alert('Registration Succesful.');</script>";
    }
    else{
      echo "<script>alert('Registration Unsuccessful.');</script>";
    }
  }
  }
// Signin
  if(isset($_POST['sigin'])){
    $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $Password = mysqli_real_escape_string($conn, md5($_POST["Password"]));

    $check_Email= mysqli_query($conn, "SELECT ID FROM employee_info WHERE Email = '$Email' AND Password='$Password'");
    
    if(mysqli_num_rows($check_Email) > 0){
      $row = mysqli_fetch_assoc($check_Email);
      $_SESSION['employee_info_ID'] = $row['ID'];
      echo "<script>alert('Login successful.');</script>";
      header("Location: home.php");
    }else{
      echo "<script>alert('Login Unsuccessful.');</script>";
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/style.css">
  <title>WELCOME PAGE</title>
</head>
<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
<!-- Sigin Form -->
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="Email" placeholder="E-mail Address" value="<?php echo $_POST['Email'];?>"required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" value="<?php echo $_POST['Password'];?>"required />
          </div>
          <input type="submit"  value="Login" name="signin" class="btn solid"/>

           
        </form>

<!-- Signup Form -->
        <form action="" class="sign-up-form" method="post">
           <h2 class="title">Sign up</h2>

           <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="Name" placeholder="Full Name" value="<?php echo $_POST['Name'];?>"required />
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" name="Email" placeholder="E-mail Address" value="<?php echo $_POST['Email'];?>"required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" value="<?php echo $_POST['Password'];?>"required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="CPassword" placeholder="Confrim Password" value="<?php echo $_POST['CPassword'];?>"required />
          </div>
          
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" name="Phone" placeholder="Contact" value="<?php echo $_POST['Phone'];?>"required />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="Position" placeholder="Job Designaiton" value="<?php echo $_POST['Position'];?>"required />
          </div>

          <input type="submit" class="btn" name="signup" value="Sign up" />
        </form>
        
      </div>
      
    </div>
     <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Register Yourself !!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            WOHOO !! Signedup and ENJOY !!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>


    
  </div>

</body>
</html>