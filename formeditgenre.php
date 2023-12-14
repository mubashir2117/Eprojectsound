
<?php
include "header.php";
?>
<?php
    include("config.php");
   

    $gid = $_POST["gid"];
    $genre_name = $_POST["genre_name"];
   

    $query = "UPDATE `genre` SET `gid`='$gid',`genre_name`='$genre_name' WHERE $gid";

    $result = mysqli_query($conn, $query);
    
    if($result){
        echo "Record inserted";
    }
    else{
        echo "Error";
    }
?>



<?php
include "footer.php";
?>