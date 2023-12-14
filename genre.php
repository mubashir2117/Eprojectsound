
<?php
include "header.php";
?>
<?php
    include("config.php");
   
    $gid = $_POST["gid"];
    $genre_name = $_POST["genre_name"];
    
    $query = "INSERT INTO `genre`(`genre_name`) VALUES ('$genre_name')";

    $result = mysqli_query($conn, $query);
    
    if($result){
        echo "Record inserted";
    }
    else{
        echo "Error";
    }
?>



<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="Post">
                    <h1>Add Genre</h1>
                    <input type="text" name="genre_name"><br><br>
                    <button class="btn btn-outline-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>