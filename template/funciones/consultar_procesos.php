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
    <title>Consultar de Procesos</title>
</head>
<body>
       <h1>Prcesos Registrados</h1>
   <table class="main-conten">   
          <tr>
              <th class="box1">Fotografia de referencia</th>
              <th class="box1">Nombre del proceso</th> 
              <th class="box1">Tipo de proceso</th>
              <th class="box1">Fragancia / Aroma</th>
              <th class="box1">Sabor</th>
              <th class="box1">Acides</th>
              <th class="box1">Cuerpo</th>
          </tr>
          <tr>
          <?php
                  try {
                      
                      $sql1="SELECT * FROM proceso";
                      $resultado=$cadena->prepare($sql1);
                      $resultado->execute(array());
                      while ($consulta = $resultado -> fetch (PDO:: FETCH_ASSOC)){
                       ?>
                       <tr>
                           <td class="box2"><img src="../fotografiaProceso/<?=$consulta['foto_proceso']?>" title="<?=$consulta['foto_proceso']?>" width="100" height="100"></td>  
                           <td class="box2"> <?php echo $consulta['nombre_proceso'];?></td>
                           <td class="box2"> <?php echo $consulta['tipo_fer'];?></td>
                           <td class="box2"> <?php echo $consulta['fragancia_proceso'];?></td>
                           <td class="box2"> <?php echo $consulta['sabor_proceso'];?></td>   
                           <td class="box2"> <?php echo $consulta['acidez_proceso'];?></td>    
                           <td class="box2"> <?php echo $consulta['cuerpo_proceso'];?></td>                  
                           <!-- <th><a href="actualizar_proceso1.php?cod=<?php echo $consulta ['id_proceso']?>"><img src="iconos/editar.png" width="60px">Editar</a></th> 
                           <th><a href="eliminar_proceso1.php?cod1=<?php echo $consulta ['id_proceso']?>"><img src="iconos/elimina.png" width="60px">Eliminar</a></th>  -->
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
