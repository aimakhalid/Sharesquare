

<!DOCTYPE html>
<html>
<head>
    <title>ShareSquare - Register</title>
    
</head>
<body style=" background:#C4A484; font-family: Arial, sans-serif; margin: 0; padding: 0;">
<?php  
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    
  }
  
  //submit these to database
  
  //Connecting to dataBase
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "aima";
  
  //Creating database connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  
  if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
  }
  else
  {
  $sql="INSERT INTO `users` ( `User`, `Email`, `Pass`) VALUES ( '$user', '$email', '$pass');";
  $result = mysqli_query($conn,$sql);
  
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You ' .$username. ' have registered successfully!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }else{
    echo "Record was not inserted";
  
  }
  }

  //submit these to database
?>
    <div style="max-width: 500px; margin: 0 auto; padding: 20px;">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <div style="margin-bottom: 20px;">
                <label style=" display: block; margin-bottom: 5px;" for="username">Username:</label>
                <input style="width: 100%;padding: 8px;font-size: 16px;" type="text" name="user" id="username" placeholder="Enter your username">
            </div>
            <div style="margin-bottom: 20px;">
                <label style="  display: block; margin-bottom: 5px;" for="email">Email:</label>
                <input style="width: 100%;padding: 8px;font-size: 16px;"  type="text" name="email" id="email" placeholder="Enter your email address">
            </div>
            <div style="margin-bottom: 20px;">
                <label style=" width: 100%;padding: 8px;font-size: 16px; display: block; margin-bottom: 5px;" for="password">Password:</label>
                <input style="width: 100%;padding: 8px;font-size: 16px;" type="password" name="pass" id="password" placeholder="Enter your password">
            </div>
            <div style="margin-bottom: 40px;">
                <button style="background-color: #555;" type="submit"><a href="login.php">Register</a></button>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('register-form').addEventListener('submit', function (e) {
            e.preventDefault();
            var name = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
        });
    </script>
</body>
</html>
