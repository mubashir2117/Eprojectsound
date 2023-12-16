<?php
include("config.php");
$id = $_GET['id'];
$query = "DELETE FROM `genre` WHERE id = $id";
$result = mysqli_query($conn, $query);
if($result){
    header("location: genrelist.php");
}
else{
    echo " fail";
}
?>