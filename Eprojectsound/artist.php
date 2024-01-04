<?php
include "header.php";
?>
<?php
    include("config.php");
   if(isset($_POST['submit'])){   
    $artist_name = $_POST["artist_name"];
    $genre_id = $_POST["genre"];
    $img=$_FILES["artist_image"];

$imgName = $img['name'];
$tempPath = $img['tmp_name'];
$myPath= "images/".$imgName;

move_uploaded_file($tempPath, $myPath);
 
    $query = "INSERT INTO `artist`(`artist_name`, `artist_image`,`genre_id`) VALUES 
    ('$artist_name','$myPath','$genre_id')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Record inserted";
        header("Location: artistlist.php");
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
                    <h1>Add artist</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="artist_name" required><br><br>         
                    <input type="file" class="p-1 border border-dark rounded" name="artist_image" required><br><br>
                    
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

                    <button class="btn btn-outline-primary btn-sm mt-2" name="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>