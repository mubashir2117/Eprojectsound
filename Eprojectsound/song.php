

<?php


include "header.php";
?>

<?php
    include("config.php");
   if(isset($_POST['submit'])){
   

<<<<<<< HEAD
    $artist_name = $_POST["artist_name"];
    $img=$_FILES["artist_image"];
    $genre_id = $_POST["genre"];
=======
    $song_name = $_POST["song_name"];
    $song_file = $_POST["song_file"];
    $genre_id = $_POST["genre"];
    $Artists_id = $_POST["artist"];
    
    $img=$_FILES["song_image"];
>>>>>>> 6c2ff3098762ecd567d6b603efc4f88385d7b2cc

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "images/".$imgName;

move_uploaded_file($tempPath, $myPath);
 
<<<<<<< HEAD
    $query = "INSERT INTO `artist`(`artist_name`, `artist_image`,`genre_id`) VALUES ('$artist_name','$myPath','$genre_id')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Record inserted";
        header("Location: artistlist.php");
=======
$img1=$_FILES["song_file"];
print_r($_FILES["song_file"]);
$imgName1 = $img1['name'];
$tempPath1 = $img1['tmp_name'];
$myPath1 = "audio/".$imgName1;

move_uploaded_file($tempPath1, $myPath1);

    $query = "INSERT INTO `song`(`song_name`,`song_image`,`song_file`,`genre_id`,`Artists_id`) VALUES
     ('$song_name','$myPath','$myPath1','$genre_id','$Artists_id')";

    $result = mysqli_query($conn, $query);

    if($res1){
        echo "Record inserted";
        header("Location: songlist.php");
>>>>>>> 6c2ff3098762ecd567d6b603efc4f88385d7b2cc
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
                <form action="" method="Post" enctype="multipart/form-data">
<<<<<<< HEAD
                    <h1>Add artist</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="artist_name" required><br><br>
=======
                    <h1>Add Song</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="song_name" required><br><br>
                    <input type="File" class="p-1 border border-dark rounded" name="song_image" required><br><br>
                    <input type="file" class="p-1 border border-dark rounded" name="song_file" required><br><br>

>>>>>>> 6c2ff3098762ecd567d6b603efc4f88385d7b2cc
                    
                    <select name="genre" id="" class="form-control mt-2">
            <?php
                $qry= "select * from genre";
                $res= mysqli_query($conn, $qry);

                while($data = mysqli_fetch_assoc($res)){
            ?>
                <option value="<?php echo $data["id"]?>"><?php echo $data["genre_name"]?></option>
            <?php
                }
            ?>
        </select><br><br>
<<<<<<< HEAD
                    <input type="file" class="p-1 border border-dark rounded" name="artist_image" required><br><br>
=======
        <select name="artist" id="" class="form-control mt-2">
            <?php
                $qry1= "select * from artist";
                $res1= mysqli_query($conn, $qry1);

                while($data1 = mysqli_fetch_assoc($res1)){
            ?>
                <option value="<?php echo $data1["Artist_id"]?>"><?php echo $data1["artist_name"]?></option>
            <?php
                }
            ?>
        </select><br><br>
>>>>>>> 6c2ff3098762ecd567d6b603efc4f88385d7b2cc

                    <button class="btn btn-outline-primary btn-sm" name="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>










<?php
include 'footer.php';

?>