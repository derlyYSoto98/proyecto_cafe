<?php
include '../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Informacion del proceso</title>
</head>
<body>
<?php
         try {
             $sql = "SELECT * FROM proceso where id_proceso=".$_REQUEST['cod'].";";
             $resultado=$cadena->prepare($sql);
             $resultado->execute (array());
             while ($consulta=$resultado-> fetch ( PDO::FETCH_ASSOC)) {
             ?>
                <form  name="form" action="actualizar_proceso2.php?id=<?php echo $_REQUEST['cod'];?> " method="POST" enctype="multipart/form-data">
                <td> <h3> Actualizando informacion del proceso <span> <?php echo $consulta['nombre_proceso']; ?></span></h3> </td > 
                     <table >
                     <tr>
                        <th >Fotografia de referencia:   </th>
                        <th > <img src="../fotografiaProceso/<?=$consulta['foto_proceso']?>" alt="" width="50px"> <input type="text" name="imagenantigua" value="<?php echo $consulta['foto_proceso']; ?>" readonly > </th>
                     </tr>
                     <tr>
                        <th >Nueva fotografia de referencia:   </th>
                        <th > <input type="file" name="nameimagen" require value="" class="box1"> </th>
                     </tr>
                     <tr>
                        <th >Nombre:   </th>
                        <th > <input type="text" name="nombrep" require value="<?php echo $consulta['nombre_proceso']; ?>" class="box1"> </th>
                     </tr>  
                     <tr>
                        <th >Tipo de proceso:   </th>
                        <th > <input type="text" name="tipop" require value="<?php echo $consulta['tipo_fer']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                        <th>Fragancia / Aroma:   </th>
                        <th> <input type="text" name="fraganciap" require value="<?php echo $consulta['fragancia_proceso']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                        <th>Sabor:   </th>
                        <th> <input type="text" name="saborp" require value="<?php echo $consulta['sabor_proceso']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                        <th>Acidez:   </th>
                        <th> <input type="text" name="acidezp" require value="<?php echo $consulta['acidez_proceso']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                        <th>Cuerpo:   </th>
                        <th> <input type="text" name="cuerpop" require value="<?php echo $consulta['cuerpo_proceso']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                         <td class="boton" > <input type="submit" name="butonp" value="Actualizar..." ></td>
                         <td><a href="javascript:history.go(-1)"> cancelar....</a> </td>
                     </tr>  
                </table>
                          
                      </form>
              <?php
             }
         } catch (Exception $e) {
            die ('ALERTA!!! Revise su conexion a la base para generar la consulta.... ' . $e-> getMessage () );
        } 
         
         ?>

</body>
</html>