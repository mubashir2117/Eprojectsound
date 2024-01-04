<?php
session_start();
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
       <!--favicon-img--> 
       <link rel="icon" type="image/png" href="images/favicon.jpg">
       <!--favicon-img-->
    
        <link rel="stylesheet" href="css/index.css">
       
    
    </head>
<body>
    <!-- MAIN CONTENT -->
    <main id="index-one">


        
          <!-- CUSTOM CURSOR -->
          <!-- <div class="cursor scale"></div>
          <div class="cursor-two scale"></div> -->
          <!-- CUSTOM CURSOR -->

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="p">
                <img src="images/headphone.png" alt="headphone">
                Use Headphone For Better Experience
            </div>
        </div>
        <!-- PRELOADER -->


<!-- HEADER -->
<div id="header">



    <!-- NAVIGATION -->
    <div class="navigation">
        <div class="logo hover ">
           <a href="#" class="text">Sound </a>
        </div>
        <div class="menu-bar hover ">
            <div class="menu-bar-name text">
                Menu
            </div>
           
            <div class="menu-bar-lines text">
                <div class="menu-bar-line"></div>
                <div class="menu-bar-line"></div>
            </div>
            <?php 
                if(!isset($_SESSION['user_name'])){
            ?>
        <div class="menu-bar-name text mx-4">
               <a href="login.php">
                   login
               </a> 
            </div> 
            <?php } 
            else {?>
               <div class="menu-bar-name text mx-4">
               <a href="">
                  <?php echo $_SESSION['user_name'] ?>
               </a> 
            </div> 
            <div class="menu-bar-name text mx-4">
               <a href="logout.php">
                   logout
               </a> 
            </div>

            <?php } ?>
        </div>
    </div> 
    
    <!-- NAVIGATION -->




    <!-- SOCIAL-MEDIA-LINKS -->
    <div class="social-media-links">
        <ul>
            <li ><a href="https://studio.youtube.com/channel/UCCCiwtoLf3wMnRMdxOYTErg/editing/images" data-text="Youtube" class="text hover">YT</a></li>
            <li ><a href="#" data-text="Facebook" class="text hover">FB</a></li>
            <li ><a href="#" data-text="Instagram" class="text hover">IG</a></li>
        </ul>
    </div>
    <!-- SOCIAL-MEDIA-LINKS -->

    <!-- HEADPHONE IMG -->
    <div class="headphone img text">
        <img src="images/headphone.png"  class = "text" alt="headphone">
    </div>
    <!-- HEADPHONE IMG -->



    <!-- NEW RELEASE -->


    <!-- NEW RELEASE -->

    

</div>
<!-- HEADER -->


    <!-- NAVIGATION CONTENT -->

    <div class="navigation-content">
        <div class="navigation-logo hover opacity">
            <a href="#" class="text">Sound</a>
         </div>
        <ul class="navigation-ul">
            <li><a href="index.php" data-text="Home" data-img="images/bg-image-three.jpg">Home</a></li>
            <li><a href="about.php"  data-text="About"  data-img="images/about-img.jpg">About</a></li>
            <li><a href="songone.php" data-text="Songs"  data-img="images/album-thumbnail-nine.jpg">Songs</a></li>
            <li><a href="contact.php"  data-text="Contact" data-img="images/album-thumbnail-four.jpg">Contact</a></li>
        </ul>
        <div class="navigation-close hover about-close opacity">
            <div class="navigation-close-line"></div>
            <div class="navigation-close-line"></div>
          </div>
    
            <div class="project-preview"></div>
    
            
     <!-- HEADPHONE IMG -->
     <div class="headphone-navigation opacity">
        <img src="images/headphone.png" title="headphone zone" class="text" alt="headphone">
      </div>
       <!-- HEADPHONE IMG -->
    
    
        <!-- SOCIAL MEDIA LINKS -->
        <div class="social-media-links-navigation">
            <ul>
                <li ><a href="#"  class="text hover opacity">YT</a></li>
                <li ><a href="#"  class="text hover opacity">FB</a></li>
                <li ><a href="#"  class="text hover opacity">IG</a></li>
            </ul>
        </div>
          <!-- SOCIAL MEDIA LINKS -->
    
    </div>
    
    <!-- NAVIGATION CONTENT -->



    </main>
    <!-- MAIN CONTENT -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bez.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/index.js"></script>

</body>
</html>