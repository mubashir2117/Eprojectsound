
<?php
include("config.php");
$id = $_GET['getid'];
$qry = "SELECT * FROM `artist` WHERE `Artist_id` = '$id'";
$ress =mysqli_query($conn, $qry) ;
$data  = mysqli_fetch_assoc($ress);



?>


<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="Post" enctype="multipart/form-data">
                    <h1>Edit Artist</h1> 
                    <input value="<?php echo $data["Artist_id"]?>" type="hidden" name="id">
                    <input value="<?php echo $data['artist_name']?>" type="text" name="artist_name"><br><br>
                    <input value="<?php echo $data['artist_image']?>" type="file" name="artist_image"><br><br>

              
           
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
                   

                        <button class="btn btn-outline-primary mt-3" name="submit">Edit</button>
                    <a class="btn btn-primary mt-3 mx-2" href="artistlist.php">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['submit'])){
// $id = $_POST["id"];
$artist_name = $_POST["artist_name"];
// $artist_image = $_files["artist_image"];
$genre_id = $_POST["genre_id"];

$img1=$_FILES["artist_image"];

$imgName1 = $img1['name'];
$tempPath1 = $img1['tmp_name'];
$tempPath1 = $img1['type'];

$myPath1 = "images/".$imgName1;

move_uploaded_file($tempPath1, $myPath1);

$query1 = "UPDATE `artist` SET `artist_name`='$artist_name'`artist_image`='$myPath1',`genre_id`='$genre_id' WHERE `Artist_id` = '$id'";

$result1 = mysqli_query($conn, $query1);

if($result1){
   echo"update";
}
else{
    echo "Error";
}
}
?>
