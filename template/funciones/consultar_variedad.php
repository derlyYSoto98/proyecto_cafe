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
    <title>Consultar de Variedad</title>
</head>
<body>
       <h1>Variedades Registradas</h1>
   <table class="main-conten">   
          <tr>
              <th class="box1">Fotografia de referencia</th>
              <th class="box1">Nombre de la variedad</th>
              <th class="box1">Descripcion</th>
          </tr>
          <tr>
          <?php
                  try {
                      
                      $sql1="SELECT * FROM variedad";
                      $resultado=$cadena->prepare($sql1);
                      $resultado->execute(array());
                      while ($consulta = $resultado -> fetch (PDO:: FETCH_ASSOC)){
                       ?>
                       <tr>
                           <th class="box2"><img src="../fotografiaVariedad/<?=$consulta['foto_variedad']?>" title="<?=$consulta['foto_variedad']?>" width="100" height="100"></th>  
                           <th class="box2"> <?php echo $consulta['nombre_variedad'];?></th>
                           <th class="box2"> <?php echo $consulta['descripcion_var'];?></th>                           
                           <!-- <th><a href="actualizar_variedad1.php?cod=<?php echo $consulta ['id_variedad']?>"><img src="iconos/editar.png" width="60px">Editar</a></th>
                           <th><a href="eliminar_variedad1.php?cod1=<?php echo $consulta ['id_variedad']?>"><img src="iconos/elimina.png" width="60px">Eliminar</a></th>  -->
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
