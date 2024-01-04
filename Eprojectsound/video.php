
<?php
include "header.php";
?>
<?php
    include("config.php");
   if(isset($_POST['submit'])){   
    $video_name = $_POST["video_name"];
    $genre_id = $_POST["genre"];
    $Artist_id = $_POST["artist"];
    
    $video=$_FILES["video_file"];
    $videoName= $video['name'];
    $tempPath = $video['tmp_name'];
    $myPath= "images/".$videoName;
    print_r($_FILES["video_file"]);
    move_uploaded_file($tempPath, $myPath);
    
    $query12 = "INSERT INTO `video`(`video_name`,`video_file`,`genre_id`,`Artists_id`) 
    VALUES ('$video_name','$myPath','$genre_id','$Artist_id')";

    $result12 = mysqli_query($conn, $query12);
    if ($result12) {
        echo "recodr";
    } else {
        echo "Error";
    }
    
}
?>

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="Post" enctype="multipart/form-data">
                    <h1>Add Video</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="video_name" required><br><br>         
                    <input type="file" class="p-1 border border-dark rounded" name="video_file" required><br><br>
                    
                    <select name="genre" id="" class="form-control mt-2">
            <?php
                $qry3= "select * from genre";
                $res3= mysqli_query($conn, $qry3);

                while($data3 = mysqli_fetch_assoc($res3)){
            ?>
                <option value="<?php echo $data3["id"]?>"><?php echo $data3["genre_name"]?></option>
            <?php
                }
            ?>
        </select><br><br>

        <select name="artist" id="" class="form-control mt-2">
            <?php
                $qry11= "select * from artist";
                $res11= mysqli_query($conn, $qry11);

                while($data11 = mysqli_fetch_assoc($res11)){
            ?>
                <option value="<?php echo $data11["Artist_id"]?>"><?php echo $data11["artist_name"]?></option>
            <?php
                }
            ?>
        </select><br><br>


                    <button class="btn btn-outline-primary btn-sm mt-2" name="submit">Add Video</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>