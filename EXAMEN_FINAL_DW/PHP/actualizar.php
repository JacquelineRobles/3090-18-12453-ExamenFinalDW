<?php
include 'conexion.php';

$usuario = '';
$contrasenia = '';
$nombre = '';
$correo = '';
$tipo_usuario = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tb_usuarios WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $usuario = $row['usuario'];
    $contrasenia = $row['contrasenia'];
    $nombre = $row['nombre'];
    $correo = $row['correo'];
    $tipo_usuario = $row['tipo_usuario'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $tipo_usuario = $_POST['tipo_usuario'];

  $query = "UPDATE tb_usuarios set usuario ='$usuario', contrasenia = '$contrasenia', nombre = '$nombre', 
  correo='$correo', tipo_usuario = '$tipo_usuario' WHERE id=$id";


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
}

?>

<link rel="stylesheet" href="../CSS/estilos.css" type="text/css">
    <div class="container">
    <h2>REGISTRO DE USUARIOS</h2>
      <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST">
 <!--Inputs-->
 <div class="row">
                    <div class="col-25">
                        <label for="usuario">Nombre de Usuario:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="usuario" name="usuario">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="contrasenia">Contraseña:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="contrasenia" name="contrasenia">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="nombre">Nombre completo:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nombre" name="nombre">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="correo">Correo electrónico:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="correo" name="correo">
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="tipo_usuario">Tipo de usuario:</label>
                    </div>
                    <div class="col-75">
                        <select id="tipo_usuario" name="tipo_usuario">
                <option value="Usuario">Usuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Medico">Médico</option>
                <option value="Enfermero">Enfermero</option>
                <option value="Secretaria">Secretaria</option>
              </select>
                    </div>
                </div>

                <!--BOTÓN DE REGISTRO-->
                <div class="row">
                <button class="btn-success" name="update">Update</button>
                </div>
      </form>
      </div>
    </div>
  </div>
</div>

