<?php
include("header.php");
?>
<?php
session_start();
    include('config.php');
    if(isset($_POST['submit'])){
      $useremail = $_POST['user_email'];
      $userpassword = $_POST['user_password'];

      $query7 = "SELECT * from users where user_email = '$useremail' AND user_password = '$userpassword'";

      $result7 = mysqli_query($conn, $query7);
      $data7 = mysqli_fetch_array($result7);
      if(mysqli_num_rows($result7) > 0){
        $_SESSION['user_email'] = $data7['user_email'];
        $_SESSION['user_password'] = $data7['user_password'];
          echo "<script>location.href = 'index.php';</script>";
      }
      else{
          
      }
    
 

  if(isset($_SESSION['user_email'])){
    echo "<script>location.href = 'index.php';</script>";
  
  }
  else{
  }
  
  if(isset($_SESSION['user_password'])){
    echo "<script>location.href = 'index.php';</script>";
  
  }
  else{
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
    
    include("footer.php");

?>

<?php
}
?>