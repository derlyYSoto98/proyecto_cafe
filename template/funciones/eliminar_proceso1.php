<?php
include '../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Variedad</title>
</head>
<body>
<table>
         <tr>
             <td>
                 <?php
                    try {
                        $sql="SELECT * FROM proceso WHERE id_proceso=".$_REQUEST['cod1'].";";
                        $resultado=$cadena->prepare($sql);
                        $resultado-> execute(array());
                        while($consulta=$resultado-> fetch (PDO:: FETCH_ASSOC)){
                            echo "<h1>Alerta!!!! esta seguro que decea eliminar el proceso <span>".$consulta['nombre_proceso']. " </span> de la base de datos.</h1>";
                        }
                    } catch (Exception $e) {
                        die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
                    }
                 ?>
             </td>
         </tr>
     </table>
         <table class="simbolos" >
                <tr>
                    <td><a href="eliminar_proceso2.php?cod2=<?php echo $_REQUEST['cod1']?>"><img src="iconos/si.png" width="120px"></a> </td>
                    <td><a href="javascript:history.go(-1)"><img src="iconos/no.png" width="120px"></a> </td>
                </tr>
         </table>

</body>
</html>
