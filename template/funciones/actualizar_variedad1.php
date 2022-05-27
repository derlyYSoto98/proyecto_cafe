<?php
include '../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Informacion de Usuario</title>
</head>
<body>
<?php
         try {
             $sql = "SELECT * FROM variedad where id_variedad=".$_REQUEST['cod'].";";
             $resultado=$cadena->prepare($sql);
             $resultado->execute (array());
             while ($consulta=$resultado-> fetch ( PDO::FETCH_ASSOC)) {
             ?>
                <form  name="form" action="actualizar_variedad2.php?id=<?php echo $_REQUEST['cod'];?> " method="POST" enctype="multipart/form-data">
                <td> <h3> Actualizando informacion de la finca  <span> <?php echo $consulta['nombre_variedad']; ?></span></h3> </td > 
                     <table >
                     <tr>
                        <th >Fotografia de referencia:   </th>
                        <th > <img src="../fotografiaVariedad/<?=$consulta['foto_variedad']?>" alt="" width="50px"> <input type="text" name="imagenantigua" value="<?php echo $consulta['foto_variedad']; ?>" readonly > </th>
                     </tr>
                     <tr>
                        <th >Nueva fotografia de referencia:   </th>
                        <th > <input type="file" name="nameimagen" require value="" class="box1"> </th>
                     </tr>
                     <tr>
                        <th >Nombre:   </th>
                        <th > <input type="text" name="nombrev" require value="<?php echo $consulta['nombre_variedad']; ?>" class="box1"> </th>
                     </tr>  
                     <tr>
                        <th >Descripcion:   </th>
                        <th > <input type="text" name="descriv" require value="<?php echo $consulta['descripcion_var']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                         <td class="boton" > <input type="submit" name="butonv" value="Actualizar..." ></td>
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