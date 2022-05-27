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
    <title>Consultar de Fincas</title>
</head>
<body>
       <h1>Fincas Registradas</h1>
   <table class="main-conten">   
          <tr>
              <th class="box1">Fotografia de referencia</th>
              <th class="box1">Nombre de la finca</th>
              <th class="box1">Ubicacion</th>
              <th class="box1">Altitud</th>  
          </tr>
          <tr>
          <?php
                  try {
                      
                      $sql1="SELECT * FROM finca";
                      $resultado=$cadena->prepare($sql1);
                      $resultado->execute(array());
                      while ($consulta = $resultado -> fetch (PDO:: FETCH_ASSOC)){
                       ?>
                       <tr>
                           <th class="box2"><img src="../fotografiaFinca/<?=$consulta['foto_finca']?>" title="<?=$consulta['foto_finca']?>" width="100" height="100"></th>  
                           <th class="box2"> <?php echo $consulta['nombre_finca'];?></th>
                           <th class="box2"> <?php echo $consulta['ubicacion_finca'];?></th>
                           <th class="box2"> <?php echo $consulta['altitud_finca'];?></th>
                           <!-- <th><a href="actualizar_finca1.php?cod=<?php echo $consulta ['id_finca']?>"><img src="iconos/editar.png" width="60px">Editar</a></th> 
                           <th><a href="eliminar_finca1.php?cod1=<?php echo $consulta ['id_finca']?>"><img src="iconos/elimina.png" width="60px">Eliminar</a></th> -->
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
