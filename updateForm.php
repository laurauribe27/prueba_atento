<?php 
    include("connection.php");
    $con=conect();

$id=$_GET['id'];

$sql="SELECT * FROM people WHERE identification='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="identification" value="<?php echo $row['identification']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="name" placeholder="Nombre" value="<?php echo $row['name']  ?>">
                                <input type="text" class="form-control mb-3" name="age" placeholder="Edad" value="<?php echo $row['age']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="Correo electronico" value="<?php echo $row['email']  ?>">
                                <input type="text" class="form-control mb-3" name="number" placeholder="Telefono" value="<?php echo $row['number']  ?>">
                                <input type="text" class="form-control mb-3" name="profession" placeholder="Profesión" value="<?php echo $row['profession']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>