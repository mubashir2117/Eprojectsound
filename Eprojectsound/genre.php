
<?php
include "header.php";
?>
<?php
    include("config.php");
   if(isset($_POST['submit'])){
   
    $genre_name = $_POST["genre_name"];
    
    $query = "INSERT INTO `genre`(`genre_name`) VALUES ('$genre_name')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Record inserted";
        header("Location: genrelist.php");
    }
    else{
        echo "Error";
    }
}
?>

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="Post">
                    <h1>Add Genre</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="genre_name" required><br><br>
                    <button class="btn btn-outline-primary btn-sm" name="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>