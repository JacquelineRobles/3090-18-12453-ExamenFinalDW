<?php

include 'conexion.php';

$id = $_GET['id'];
  $query = "DELETE FROM tb_usuarios WHERE id = $id";
  $ejecutar = mysqli_query($conexion, $query);

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
