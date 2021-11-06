<?php

include 'conexion.php';

  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $tipo_usuario = $_POST['tipo_usuario'];

  $query = "INSERT INTO tb_usuarios(usuario, contrasenia, nombre, correo, tipo_usuario) 
            VALUES ('$usuario', '$contrasenia', '$nombre', '$correo', '$tipo_usuario')";

//ejecutar mensaje
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert ("Operación realizada con éxito");
    window.location = "../index.php"
    </script>
    ';
}
else{
    echo '
    <script>
    alert ("Inténtelo de nuevo, datos no almacenado");
    window.location = "../index.php"
    </script>
    ';
}

mysqli_close($conexion);


?>
