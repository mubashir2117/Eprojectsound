<?php
include("config.php");
$id = $_GET['id'];
$query = "DELETE FROM `artist` WHERE id = $id";
$result = mysqli_query($conn, $query);
if($result){
    header("location: artistlist.php");
}
else{
    echo " fail";
}
?>