<?php
include '../conexion.php';
include '../encabezado.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuarios</title>
</head>
<body>
       <h1>Usuarios Registrados</h1>
   <table class="main-conten">   
          <tr>
              <th class="box1">Fotografia de referencia</th>
              <th class="box1">Cedula</th>
              <th class="box1">Nombre</th>
              <th class="box1">Direccion de residencia</th>
              <th class="box1">Telefono de contacto</th>
              
          </tr>
          <tr>
          <?php
                  try {
                      $sql1="SELECT * FROM usuario";
                      $resultado=$cadena->prepare($sql1);
                      $resultado->execute(array());
                      while ($consulta = $resultado -> fetch (PDO:: FETCH_ASSOC)){
                       ?>
                       <tr>
                           <th class="box2"><img src="../fotografiaUsuario/<?=$consulta['foto_usuario']?>" title="<?=$consulta['foto_usuario']?>" width="100" height="100"></th>  
                           <th class="box2"> <?php echo $consulta['cedula_usuario'];?></th>
                           <th class="box2"> <?php echo $consulta['nombre_usuario'];?></th>
                           <th class="box2"> <?php echo $consulta['direccion_usuario'];?></th>
                           <th class="box2"> <?php echo $consulta['telefono_usuario'];?></th>
                           <!-- <th><a href="actualizar_usuario1.php?cod=<?php echo $consulta ['cedula_usuario']?>"><img src="iconos/editar.png" width="60px">Editar</a></th> -->
                           <th><a href="eliminar_usuario1.php?cod1=<?php echo $consulta ['cedula_usuario']?>"><img src="iconos/elimina.png" width="60px">Eliminar</a></th>
                        </tr> 
                       <?php 
                      }
                  } catch (Exception $e) {
                    die (' ALERTA!! error en la consulta..'. $e->getMessage());
                  } 
                ?>
         </table>

</body>
</html>
