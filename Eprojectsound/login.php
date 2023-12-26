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
        echo "<script>location.href = 'index.php';</script>";
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
<body>
  
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="Post">
                    <h1>Login</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="user_email" required><br><br>
                    <input type="text" class="p-1 border border-dark rounded" name="user_password" required><br><br>

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
