<?php
include("config.php");
$id = $_GET['delid'];
<<<<<<< HEAD
$query = "DELETE FROM `artist` WHERE `Artist_id` = $id";
$result = mysqli_query($conn, $query);
if($result){
=======
$query4 = "DELETE FROM `artist` WHERE `Artist_id` = $id";
$result4 = mysqli_query($conn, $query4);
if($result4){
>>>>>>> 6c2ff3098762ecd567d6b603efc4f88385d7b2cc
    header("location: artistlist.php");
}
else{
    echo " fail";
}
?>