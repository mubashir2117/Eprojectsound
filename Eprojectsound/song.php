
<?php
include "header.php";
?>
<?php
    include("config.php");
   if(isset($_POST['submit'])){
   
    $song_name = $_POST["song_name"];
    $genre_id = $_POST["genre"];
    $Artists_id = $_POST["artist"];

    
    $img=$_FILES["song_image"];
    $imgName= $img['name'];
    $tempPath = $img['tmp_name'];
    $myPath= "images/".$imgName;
    
    move_uploaded_file($tempPath, $myPath);
    
    
    $audio = $_FILES["song_file"];
    $audioName = $audio['name'];
    $tempAudioPath = $audio['tmp_name'];
    $audioPath = "audio/".$audioName;
// $allowedAudioTypes = array("audio/mp3", "audio/wav");
    // if (in_array($_FILES["song_file"]["type"], $allowedAudioTypes)) {
        move_uploaded_file($tempAudioPath, $audioPath);



    $query9 = "INSERT INTO `song`(`song_name`,`song_image`,`song_file`,`genre_id`,`Artists_id`) VALUES
     ('$song_name','$myPath','$audioPath','$genre_id','$Artists_id')";
$result9 = mysqli_query($conn, $query9);

$qry11= "select * from song";
$res11= mysqli_query($conn, $qry11);


    if($result9){
        echo "Record inserted";
        header("Location: songlist.php");

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

                    <h1>Add Song</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="song_name" required><br><br>
                    <input type="file" class="p-1 border border-dark rounded" name="song_image" required><br><br>
                    <input type="file" class="p-1 border border-dark rounded" name="song_file" required><br><br>
                    
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
        </select><br>

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
                    <button class="btn btn-outline-primary  btn-lg" name="submit">Add Song</button>
                  
                </form>
            </div>
        </div>
    </div>
</div>





 
<?php
include 'footer.php';
            
?>