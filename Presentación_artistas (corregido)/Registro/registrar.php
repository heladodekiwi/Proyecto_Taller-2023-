<?php 

    include("coneccion.php");

    if (isset($_POST['registrar'])) {

               $name = trim($_POST['nombre']);
               $email = trim($_POST['correo']);
               $direction = trim($_POST['direccion']);
               $phone = trim($_POST['telefono']);
               $password = trim($_POST['clave']);
               $fecha = date("Y-m-d");
               $consulta = "insert into datos(nombre, correo, direccion, telefono, clave, fecha)
                   values('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
               $resultado = mysqli_query($conex, $consulta);
                

    }

?>