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
    <link rel="stylesheet" href="../css/actualizar.css">
</head>
<body>
       <h1>Usuarios Registrados</h1>
   <table class="main-conten table table-striped">   
          <tr>
              <th class="box1">Fotografia de referencia</th>
              <th class="box1">Cedula</th>
              <th class="box1">Nombre</th>
              <th class="box1">Direccion de residencia</th>
              <th class="box1">Telefono de contacto</th>
              <th></th>
              
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
                           <td class="box2"><img src="../fotografiaUsuario/<?=$consulta['foto_usuario']?>" title="<?=$consulta['foto_usuario']?>" width="100" height="100"></td>  
                           <td class="box2"> <?php echo $consulta['cedula_usuario'];?></td>
                           <td class="box2"> <?php echo $consulta['nombre_usuario'];?></td>
                           <td class="box2"> <?php echo $consulta['direccion_usuario'];?></td>
                           <td class="box2"> <?php echo $consulta['telefono_usuario'];?></th>
                           <td><a href="actualizar_usuario1.php?cod=<?php echo $consulta ['cedula_usuario']?>"><img src="iconos/editar.png" width="60px">Editar</a></td>
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
