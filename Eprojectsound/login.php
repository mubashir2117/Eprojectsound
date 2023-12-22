<?php
session_start();
    include("header.php");
    if(isset($_POST['submit'])){
      include('config.php');
      $user_email = $_POST['user_email'];
      $user_password = $_POST['user_password'];

      $query3 = "SELECT * from users where user_email = '$user_email' AND user_password = '$user_password'";

      $result3 = mysqli_query($conn, $query3);
      $data3 = mysqli_fetch_array($result3);
      if(mysqli_num_rows($result3) > 0){
        $_SESSION['user_id'] = $data3['user_id'];
        $_SESSION['user_name'] = $data3['user_name'];
          echo "<script>location.href = 'index.php';</script>";
      }
      else{
          echo "<div class='alert alert-danger w-75 mt-5 mx-auto' role='alert'>
          Username or password is incorrect
        </div>";
      }
    
  }

  if(isset($_SESSION['user_id'])){
    echo "<script>location.href = 'index.php';</script>";
  
  }
  else{

  
  
?>

<main id="main">
    <!-- ======= login Section ======= -->
<section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5">
          <h2>Login</h2>
          <p>Welcome back to our website!</p>
        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-6 mx-auto">
            <form method="post" role="form" class="php-email-form1">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="email" name="user_email" class="form-control" id="name" placeholder="Your Username" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="user_password" id="email" placeholder="Enter Password" required>
                </div>
              </div>
              
              <div class="text-center"><button type="submit" name="submit">Login</button></div>
            </form>
          </div><!-- End login Form -->
        </div>

      </div>
    </section><!-- End login Section -->
</main>

<?php
    
    include("footer.php");
  }
?>