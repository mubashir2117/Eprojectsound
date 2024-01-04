
<?php
include "header.php";
?>

<?php
include ("config.php");

$query10 = "SELECT * FROM `artist` inner join genre where genre.id = artist.genre_id";
$result10 = mysqli_query($conn,$query10);
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
            <a class="btn btn-primary"  href="artist.php" >Add new</a>
            <table class="table mt-4">
  <thead>
    <tr>
        <th scope="col">artistname</th>
        <th scope="col">artistimage</th>
        <th scope="col">Genreid</th> 
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

    </tr>
 </thead>
 <tbody>
    <?php

    while($data10 = mysqli_fetch_assoc($result10)){
   ?>
   <tr>
       
       <td><?php echo $data10["artist_name"]; ?></td>
       <td> <img src="<?php echo $data10["artist_image"]; ?>" alt="" width="250px" height="150px"></td>
       <td><?php echo $data10["genre_name"]; ?></td>

   
    <td><a class="btn btn-primary" href="editartist.php?getid=<?php echo $data10['Artist_id']?>">Edit</a></td>
    <td><a class="btn btn-danger" href="deleteartist.php?delid=<?php echo $data10['Artist_id']?>">Delete</a></td>
    
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

