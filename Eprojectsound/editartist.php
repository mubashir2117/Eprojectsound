

<?php
include "header.php";
?>
<?php
    include("config.php");
    $id = $_GET['getid'];

   if(isset($_POST['submit'])){
    // $id = $_POST["id"];
    $artist_name = $_POST["artist_name"];
    $artist_image = $_POST["artist_image"];
    $genre_id = $_POST["genre_id"];

    
    $query1 = "UPDATE `artist` SET `artist_name`='$artist_name',`artist_image`='$artist_image',`genre_id`='$genre_id' WHERE `Artist_id` = '$id'";

    $result1 = mysqli_query($conn, $query1);

    if($result1){
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
                    <h1>Edit Artist</h1>
                    <?php
                    // "SELECT * FROM `artist` inner join genre where genre.id = artist.genre_id";
                    $query = "SELECT * FROM `artist` WHERE Artist_id = $id";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_assoc($result);
                    ?>
        <input value="<?php echo $rows["Artist_id"]?>" type="hidden" name="id">

                    <input value="<?php echo $rows['artist_name']?>" type="text" name="artist_name"><br><br>
                    <input value="<?php echo $rows['artist_image']?>" type="text" name="artist_image"><br><br>
                    <select name="genre_id" id="" class="form-control mt-2">
            <?php
              $qry= "select * from genre";
              $res= mysqli_query($conn, $qry);
              
              while($data = mysqli_fetch_assoc($res)){
                  if($data['id'] == $rows['genre_id'] ){
                    $selected= 'selected';
                  }
                  else{
                    $selected= '';
                  }
                  ?>

                <option <?php echo $selected ?> value="<?php echo $data["id"]?>"><?php echo $data["genre_name"]?></option>
            <?php
                }
            ?>
        </select>
                   

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