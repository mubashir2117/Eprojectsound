
<?php
include "header.php";
?>
<?php
    include("config.php");
    $id = $_GET['id'];

   if(isset($_POST['submit'])){
    $id = $_POST["id"];
    $genrename = $_POST["genre_name"];
    
    $query = "UPDATE `genre` SET  `genre_name`='$genrename' WHERE id = $id";

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
                <form action="genrelist.php" method="Post">
                    <h1>Edit Genre</h1>
                    <?php
                    $qry = "SELECT * FROM `genre` WHERE id = $id";
                    $result1 = mysqli_query($conn, $qry);
                    $rows = mysqli_fetch_assoc($result1);
                    ?>
        <input value="<?php echo $rows["id"]?>" type="hidden" name="id">

                    <input value="<?php echo $rows['genre_name']?>" type="text" name="genrename"><br><br>
                    <button class="btn btn-outline-primary" name="submit">Edit</button>
                    <a href="genrelist.php">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>