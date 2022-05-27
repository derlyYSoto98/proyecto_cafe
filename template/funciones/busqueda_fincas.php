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
    <link rel="stylesheet" href="css/buslibro.css">
    <link rel="stylesheet" href="css/buscar.css">
    <title>Busqueda de fincas</title>
</head>
<body>
    <div class="titulo">
    <h2>Buscar fincas Registrada</h2>
    <h5>La busqueda se genera por numero de id</h5>
</div>
  <form action="" method="POST">
    <table class="tabla3" >
       <tr>
           <td><input type="text" name="txtbuscar" id="box"></td>
           <td><input type="submit" value="Buscar..." name="btnbuscar"></td>
       </tr>
    </table>
  </form>

  <?php
    if (isset($_POST['btnbuscar'])) {
    /* echo "Buscando...."; */
    $busqueda=$_POST['txtbuscar']; /* echo $busqueda; */
        if ($busqueda != "") {
        ?>
           <table class="table1" width="700px">
             <tr>
                 <td class="box1"> Numero de documento</td>
                 <td class="box1">Nombre Completo</td>
                 <td class="box1">Direccion de Residencia</td>
                 <td class="box1">Fotografia de referencia</td>
                
             </tr>
        <?php
        try {
            $sql="SELECT * FROM finca WHERE id_finca =?";
            $resultado = $cadena->prepare($sql);
            $resultado -> execute(array($busqueda));
            $contador = $resultado -> rowCount();
            if ($contador >= 1) {
                while ($consulta = $resultado->fetch(PDO:: FETCH_ASSOC)){
                ?>
                   <tr>
                       <td class="box2"><?php echo $consulta['nombre_finca'];?></td>
                       <td class="box2"><?php echo $consulta['ubicacion_finca'];?></td>
                       <td class="box2"><?php echo $consulta['altitud_finca'];?></td>
                       <td class="box2"><img src="../fotografiaFinca/<?=$consulta['foto_finca']?>" title="<?=$consulta['foto_finca']?>" width="100" height="100"></td>
                       <th><a href="actualizar_finca1.php?cod=<?php echo $consulta ['id_finca']?>"><img src="iconos/editar.png" width="60px">Editar</a></th>
                       <th><a href="eliminar_finca1.php?cod1=<?php echo $consulta ['id_finca']?>"><img src="iconos/elimina.png" width="60px">Eliminar</a></th>
                   </tr>
                 <?php
                }
               }else{
                   ?>
                   <label>
                    <?php 
                   /* echo "<center>No se encontraron datos que concuerden con la busqueda, por verifique la informacion....</center>"; */
                   ?>
                   <script type="text/javascript">window.alert("No se encontraron datos que concuerden con la busqueda, por verifique la informacion...."); window.location="busqueda_fincas.php" </script>
                   <?php
               }
        } catch (Exception $e) {
            die ('ALERTA!!! Error al ejecutar la busqueda.... ' . $e-> getMessage () );
        }
        }else{
            ?>
            <label>
                <?php
            /* echo "<center>La casilla esta vacia por favor ingrese un dato para buscar..</center>"; */
            ?>
             <script type="text/javascript">window.alert("La casilla esta vacia por favor ingrese un dato para buscar.."); window.location="busqueda_fincas.php" </script>
            </label>
            <?php
        }
    }
  ?>
     </table> 

       <a href="../fincas.php" class="regresar">Volver</a>

</body>
</html>