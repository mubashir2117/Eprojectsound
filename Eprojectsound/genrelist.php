
<?php
include "header.php";
?>

<?php
include ("config.php");
$query = "Select * from `genre`";
$result = mysqli_query($conn,$query);

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
            <a class="btn btn-primary" href="genre.php" >Add Genre</a>
            <table class="table mt-4">
  <thead>
    <tr>
        <th scope="col">Genreid</th> 
        <th scope="col">GenreName</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

    </tr>
 </thead>
 <tbody>
    <?php
    while($data = mysqli_fetch_assoc ($result)){
   ?>
   <tr>
   <td><?php echo $data["id"]; ?></td>

    <td><?php echo $data["genre_name"]; ?></td>
   
    <td><a class="btn btn-primary" href="editgenre.php?id=<?php echo $data["id"];?> ">Edit</a></td>
    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"];?>">Delete</a></td>
   </tr>
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

