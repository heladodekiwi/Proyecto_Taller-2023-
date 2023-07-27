<?php 

    include("coneccion.php");

    if (isset($_POST['registro'])) {
        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 && 
            strlen($_POST['direction']) >= 1 && 
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['password']) >= 1
           ) {
               $name = trin($_POST['name']);
               $email = trin($_POST['email']);
               $direction = trin($_POST['direction']);
               $phone = trin($_POST['phone']);
               $password = trin($_POST['password']);
               $fecha = date('d/m/y');
               $consulta = "INSERT-INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
                   VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
               $resultado = mysqli_query($conex, $consulta);
                if ($resultado) {
                 ?>
                    <h3 class="success">Tu registro se a completado</h3>
                 <?php    
                } else {
                 ?>
                    <h3 class="error">Ocurrio un error</h3>
                 <?php
                }
            } else {
                ?>
                    <h3 class="error">Llena todos los campos</h3>
                <?php
            }

    }

?>