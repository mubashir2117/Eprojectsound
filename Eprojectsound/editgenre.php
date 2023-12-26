
<?php
include "header.php";
?>
<?php
    include("config.php");
    $id = $_GET['getid'];

   if(isset($_POST['submit'])){
    $id = $_POST["id"];
    $genre_name = $_POST["genre_name"];
    
<<<<<<< HEAD
    $query = "UPDATE `genre` SET `genre_name`='$genre_name' WHERE id = $id";
  $result = mysqli_query($conn, $query);

    if($result){
=======
    $query1 = "UPDATE `genre` SET `genre_name`='$genre_name' WHERE id = $id";
  $result1 = mysqli_query($conn, $query1);

    if($result1){
>>>>>>> 6c2ff3098762ecd567d6b603efc4f88385d7b2cc
       echo"update";
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
                    <h1>Edit Genre</h1>
                    <?php
                    $qry = "SELECT * FROM `genre` WHERE id = $id";
                    $result1 = mysqli_query($conn, $qry);
                    $rows = mysqli_fetch_assoc($result1);
                    ?>
        <input value="<?php echo $rows["id"]?>" type="hidden" name="id">

                    <input value="<?php echo $rows['genre_name']?>" type="text" name="genre_name"><br><br>
<<<<<<< HEAD
                    <button class="btn btn-outline-primary" name="submit">Edit</button>
                    <a href="genrelist.php">Cancel</a>
=======
                    <button class="btn btn-outline-primary mt-2" name="submit">Edit</button>
                    <a class="btn btn-primary mt-2 mx-2" href="genrelist.php">Cancel</a>
>>>>>>> 6c2ff3098762ecd567d6b603efc4f88385d7b2cc
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>