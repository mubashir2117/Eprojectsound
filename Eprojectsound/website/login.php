<?php
session_start();
// include("header.php");
?>
<?php

    include('config.php');

    if(isset($_POST['submit'])){

    
      $user_email = $_POST['user_email'];
      $user_password = $_POST['user_password'];

      $query = "SELECT * from users where user_email = '$user_email' AND user_password = '$user_password'";

      $result = mysqli_query($conn, $query);
      $data = mysqli_fetch_array($result);
      if(mysqli_num_rows($result) > 0){
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['user_name'] = $data['user_name'];
        $_SESSION['role'] = $data['role_id'];

        if($_SESSION['role'] == 2){

          echo "<script>location.href = 'index.php';</script>";
        }
      }
      else{
          echo "<div class='alert alert-danger w-75 mt-5 mx-auto' role='alert'>
          Username or password is incorrect
        </div>";
      }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
    body {
      font-family: 'Arial', sans-serif;
      background: url(./images/imgheader.jpg); /* login BACKGROUND IMAGE*/
      background-repeat: no-repeat;
      background-position: center;

      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      color: #2196F3;
    }

    .login-form {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .login-form label {
      color: #2196F3;
      font-weight: bold;
      text-align: left;
    }

    .login-form input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      margin-top: 5px;
      margin-bottom: px;
      border: 1px solid #2196F3;
      border-radius: 5px;
      background: #fff;
      color: #333;
      outline: none;
    }

    .login-form button {
      background: #2196F3;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.3s ease;
    }

    .login-form button:hover {
      background: #1565C0;
    }

    .login-form button:active {
      background: #0D47A1;
    }

    
  </style>
<body>
  
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
<div class="login-container">
                <form action="" class="login-form" id="loginForm"  method="Post">
                    <h1>Login</h1>
                    <label for="username">Username:</label>
                    <input type="text" class="p-1 border border-dark rounded" id="username" name="user_email" autocomplete="off" required><br><br>
                    <label for="password">Password:</label>
                    <input type="password" class="p-1 border border-dark rounded" id="password" name="user_password" autocomplete="off" required><br><br>

                    <button class="btn btn-outline-primary btn-lg" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
    
    // include("footer.php");

?>
