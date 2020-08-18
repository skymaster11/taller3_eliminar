<?php include("includes/conexion.php")?>

<?php include("includes/header.php")?>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand mx-auto">AGENDA</a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 text-center">
                <table class="table table-striped">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acción</th>
                    </tr>
                    <?php
                        $query = "SELECT * FROM personas";
                        $resultado = mysqli_query($conn, $query);

                         while($row = mysqli_fetch_array($resultado)){ ?>
                    <tr>
                        <td data-label="Nombre"><?php echo $row['nombre'] ?></td>
                        <td data-label="Correo"><?php echo $row['correo'] ?></td>
                        <td data-label="Teléfono"><?php echo $row['telefono'] ?></td>
                        <td data-label="Acciones"><p><a href="eliminar.php?id=<?php echo $row['id_agenda']?>"class="btn btn-danger"><i class="fas fa-trash"></i></a></p></td>
                    </tr>
                   <?php } ?>

                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('title').focus();
    </script>

</body>
</html>