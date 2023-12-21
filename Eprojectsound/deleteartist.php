<?php
include("config.php");
$id = $_GET['delid'];
$query = "DELETE FROM `artist` WHERE `Artist_id` = $id";
$result = mysqli_query($conn, $query);
if($result){
    header("location: artistlist.php");
}
else{
    echo " fail";
}
?>