<?php include("PHP/conexion.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FORMULARIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="IMG/favicon-32x32.png" type="image/png">
</head>

<body>

    <!-- header -->
    <header class="header" id="header">
        <div class="head-top">
            <div class="site-name">
                <span><img src="IMG/LogoUMG.png" alt="logo umg" height="85px"></span>
            </div>
            <div class="site-nav">
                <span id="nav-btn">EXAMEN FINAL DESARROLLO WEB</span>
            </div>
        </div>

    </header>
    <!-- fin header -->

    <!--inicio main-->
    <main>
        <div class="container">
            <h2>REGISTRO DE USUARIOS</h2>
            <form action="php/registro.php" id='formulario' method="post">

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

                <div class="row">
				<ul class="error" id="error"></ul>
			    </div>

                <!--BOTÓN DE REGISTRO-->
                <div class="row">
                <input type="submit" class="btn" value="Registrarse">
                </div>
            </form>
            </div>

            <div class="container-tabla"> 
             <div class="div_tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Tipo de usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
          $query = "SELECT * FROM tb_usuarios";
          $result_tasks = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr>
                                <td>
                                    <?php echo $row['usuario']; ?>
                                </td>
                                <td>
                                    <?php echo $row['contrasenia']; ?>
                                </td>
                                <td>
                                    <?php echo $row['nombre']; ?>
                                </td>
                                <td>
                                    <?php echo $row['correo']; ?>
                                </td>
                                <td>
                                    <?php echo $row['tipo_usuario']; ?>
                                </td>
                                <td>
                                    <a href="PHP/actualizar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="PHP/eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>

        
    </main>
    <!--fin main-->

    <!-- footer -->
    <footer class="footer">
        <div>
            <h2>JACQUELINE ALEJANDRA ROBLES VÁSQUEZ </h2>
            <p>3090-18-12453</p>
        </div>
    </footer>
    <!-- end of footer -->

    <script src="JS/registro.js"></script>
</body>

</html>