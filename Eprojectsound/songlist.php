<?php
include "header.php";
?>

<?php
include ("config.php");
$query = "SELECT * FROM `song` inner join genre where genre.id = song.genre_id";
$qry1 = "SELECT * FROM `song` inner join artist where artist.Artist_id = song.Artists_id";

$result = mysqli_query($conn,$query);
$res1 = mysqli_query($conn,$qry1);

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </head>
 <body>
 <div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <a class="btn btn-primary mb-3 f-s-12"  href="song.php">Add Song</a>
            <table class="table mt-4">
  <thead>
    <tr>
        <th scope="col">song_name</th>
        <th scope="col">song_file</th>
        <th scope="col">song_image</th>
        <th scope="col">Genreid</th>
        <th scope="col">Artists_id</th> 
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

    </tr>
 </thead>
 
 <tbody>
    <?php
    while($data = mysqli_fetch_assoc($result)){
   ?>
   <tr>
       
       <td><?php echo $data["song_name"]; ?></td>
       <td> <img src="<?php echo $data["song_file"]; ?>" alt="" width="150px" height="100px"></td>
       <td> <img src="<?php echo $data["song_image"]; ?>" alt="" width="150px" height="150px"></td>

       <td><?php echo $data["genre_name"]; ?></td>
       <?php
    while($data1 = mysqli_fetch_assoc($res1)){
   ?>
       <td><?php echo $data1["artist_name"]; ?></td>


   
    <td><a class="btn btn-primary" href="editsong.php?editsid=<?php echo $data['song_id']?>">Edit</a></td>
    <td><a class="btn btn-danger" href="deletesong.php?delsid=<?php echo $data['song_id']?>">Delete</a></td>
   </tr>


   <?php     
}
    ?>

<?php     
}
    ?>
 </tbody>
 </table>
 </body>
 </html>

        </div>
    </div>
</div>
<?php
include "footer.php";
?>

