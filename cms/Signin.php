<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Signin.css">
  <title>Sign-IN</title>
</head>

<body>
  <form class="container" method="POST" action="Signin.php">
    <div class="form-group">
      <label for="LoginUsername">Username : </label>
      <input type="text" class="form-control" id="LoginUsername" name="LoginUsername" placeholder="Enter your Username">
    </div>
    <div class="form-group">
      <label for="LoginPassword">Password</label>
      <input type="password" class="form-control" id="LoginPassword" name="LoginPassword" placeholder="Enter your Password">
    </div>
    <button type="submit" class="btn btn-primary button">Submit</button>
  </form>




  

  
  <?php    $conn = mysqli_connect("localhost", "root", "","cms") ;
         if(isset($user))
         {
         $query= mysqli_query( $conn ,"select * from users where username=$user"); 
           $query= mysqli_query( $conn ,"select * from new_post where user=$user");
          }
           ?>
  <?php




  if (isset($_POST['LoginUsername'], $_POST['LoginPassword'])) {
    $user=$_POST['LoginUsername'];
    $_SESSION['LoginUsername'] = $user;
    $LoginPassword = $_POST['LoginPassword'];
    if (isset($user, $LoginPassword)) {
      $conn = new mysqli("localhost", "root", "", "cms");
      $sql = "SELECT username , password FROM users WHERE username = '$user' && password ='$LoginPassword'";
      $result = $conn->query($sql);
      echo $user . "<br>";
      if (mysqli_num_rows($result) == 0) {
        echo "Username Not Found or Password is incorrect";
      } else {
        echo "Welcome";
        header("Location:dashbord.php");
        }
      }
    }

 
  ?> 

 


   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="nav-bar ">
      <li><a href="./Signup.php">Signup</a></li>
      <li><a href="Signin.php">Signin</a></li>
      
      <li><a href="logout.php">logout</a></li>
    </ul>
  </nav>
</body>

</html>