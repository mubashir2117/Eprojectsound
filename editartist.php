

<?php
include "header.php";
?>
<?php
    include("config.php");
    $id = $_GET['id'];

   if(isset($_POST['submit'])){
    $id = $_POST["id"];
    $artist_name = $_POST["artist_name"];
    $artist_image = $_POST["artist_image"];

    
    $query = "UPDATE `artist` SET  `artist_name`='$artist_name' ,`artist_image`='$artist_image' WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if($result){
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
                <form action="artistlist.php" method="Post">
                    <h1>Edit Artist</h1>
                    <?php
                    $qry = "SELECT * FROM `artist` WHERE id = $id";
                    $result1 = mysqli_query($conn, $qry);
                    $rows = mysqli_fetch_assoc($result1);
                    ?>
        <input value="<?php echo $rows["id"]?>" type="hidden" name="id">

                    <input value="<?php echo $rows['artist_name']?>" type="text" name="artist_name"><br><br>
                    <input value="<?php echo $rows['artist_image']?>" type="text" name="artist_image"><br><br>

                    <button class="btn btn-outline-primary" name="submit">Edit</button>
                    <a href="artistlist.php">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>