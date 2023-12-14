
<?php
include "header.php";
?>

<?php
include ("config.php");
$query = "Select * from genre";
$result = mysqli_query($conn,$query);

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </head>
 <body>
 <table class=" table table-bordered p-2 w-50 mx-auto mt-5 bg-dark text-light">
 <thead>
    <tr class="bg-light text-white">
        <th>GenreName</th>
       
        <th>Edit</th>
       
    </tr>


 </thead>
 <tbody>
    <?php
    while($data = mysqli_fetch_assoc ($result)){
   ?>
   <tr>
    <td><?php echo $data["genre_name"]; ?></td>
   
    <td><a href="editgenre.php?id=<?php echo $data["gid"];?>">Edit</a>

    </td>
    
   </tr>
  


   <?php     
}
    ?>

 </tbody>
 </table>
 </body>
 </html>
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
           
        </div>
    </div>
</div>
<?php
include "footer.php";
?>