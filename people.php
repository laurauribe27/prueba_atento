<?php
    include("connection.php");
    $con=conect();

    $sql="SELECT *  FROM people";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pagina Personas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>

    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <center><h1>Ingrese datos</h1></center>
                    <form action="insert.php" method="POST">

                        <input type="text" class="form-control mb-3" name="identification" placeholder="Identificación">
                        <input type="text" class="form-control mb-3" name="name" placeholder="Nombre Completo">
                        <input type="text" class="form-control mb-3" name="age" placeholder="Edad">
                        <input type="text" class="form-control mb-3" name="email" placeholder="Correo electronico">
                        <input type="text" class="form-control mb-3" name="number" placeholder="Numero de telefono">
                        <input type="text" class="form-control mb-3" name="profession" placeholder="Profesión">

                        <center><input type="submit" class="btn btn-success"></center>
                    </form>
                <table class="table" id="myTable">
                <center><h1>Datos ingresados</h1></center>
                    <thead class="table-secondary table-striped" >
                        <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Profesión</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['identification']?></th>
                                    <th><?php  echo $row['name']?></th>
                                    <th><?php  echo $row['age']?></th>
                                    <th><?php  echo $row['email']?></th>    
                                    <th><?php  echo $row['number']?></th>  
                                    <th><?php  echo $row['profession']?></th>    


                                    <th><a href="updateForm.php?id=<?php echo $row['identification'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['identification'] ?>" class="btn btn-danger">Eliminar</a></th>                                       
                                </tr>
                            <?php 
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> 
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
        <script>
                $(document).ready(function() {
                    $('#myTable').DataTable( {
                        language: {
                            url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                        }
                    } );
                } );
            </script>
    </body>
</html>