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
    <title>Editar Informacion de Usuario</title>
</head>
<body>
<?php
         try {
             $sql = "SELECT * FROM usuario where cedula_usuario=".$_REQUEST['cod'].";";
             $resultado=$cadena->prepare($sql);
             $resultado->execute (array());
             while ($consulta=$resultado-> fetch ( PDO::FETCH_ASSOC)) {
             ?>
                <form  name="form" action="actualizar_usuario2.php?id=<?php echo $_REQUEST['cod'];?> " method="POST" enctype="multipart/form-data">
                <td> <h3> Actualizando informacion del Usuario <span> <?php echo $consulta['nombre_usuario']; ?></span></h3> </td > 
                     <table >
                     <tr>
                        <th >Fotografia de referencia:   </th>
                        <th > <img src="../fotografiaUsuario/<?=$consulta['foto_usuario']?>" alt="" width="50px"> <input type="text" name="imagenantigua" value="<?php echo $consulta['foto_usuario']; ?>" readonly > </th>
                     </tr>
                     <tr>
                        <th >Nueva fotografia de referencia:   </th>
                        <th > <input type="file" name="nameimagen" require value="" class="box1"> </th>
                     </tr>
                     <tr>
                        <th >Numero de documento:   </th>
                        <th > <input type="text" name="cedula" require value="<?php echo $consulta['cedula_usuario']; ?>" class="box1"> </th>
                     </tr>  
                     <tr>
                        <th >Nombre Completo:   </th>
                        <th > <input type="text" name="nombre" require value="<?php echo $consulta['nombre_usuario']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                        <th>Direccion de Residencia:   </th>
                        <th> <input type="text" name="direccion" require value="<?php echo $consulta['direccion_usuario']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                        <th >Telefono de contacto:   </th>
                        <th> <input type="text" name="telefono" require  value="<?php echo $consulta['telefono_usuario']; ?>" class="box1"> </th>
                     </tr>
                     <tr>
                         <td class="boton" > <input type="submit" name="buton" value="Actualizar..." ></td>
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