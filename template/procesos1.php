<?php
include '../template/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Registro de informacion</title>
</head>
<body>
<div class="container">
     <nav class="main">
       <img src="../img/cafe_logo.png" alt="logo" class="logoimagen">
       <ul class="nav-menu">
           <li><a href="inicio.php">inicio</a></li>
           <li><a href="usuario.php">Usuarios</a></li>
           <li><a href="fincas.php">Fincas</a></li>
           <li><a href="variedad.php">Variedad</a></li>
           <li><a href="procesos.php">Proceso</a></li>
           <!-- <li><a href="#"> <i class="fas fa-search"></i></a></li> -->
       </ul>
     </nav>
     <nav class="main">
       <img src="../img/cafe_logo.png" alt="logo" class="logoimagen">
       <ul class="nav-menu">
           <li><a href="funciones/consultar_procesos.php">Consultar procesos</a></li>
           <li><a href="funciones/actualizar_procesos.php">Actualizar Procesos</a></li>
           <li><a href="funciones/eliminar_procesos.php"> Eliminar Procesos</a></li>
           <li><a href="funciones/busqueda_proceso.php">Buscar Proceso</a></li>
          <!--  <li><a href="#"> <i class="fas fa-search"></i></a></li> -->
       </ul>
     </nav>
     <hr>
 </div>

  <h1>REGISTRO DE PROCESOS</h1>
   <form action="" name="form1" method="POST" enctype="multipart/form-data" class="formulario_principal">
                <fieldset id="informacionproceso">
                    <legend>Informacion del proceso</legend>
                          <div class="form-group">
                                <label>Usario:</label>
                                <select name="idusuario" id="idusuario" class="form-control">
                                    <option value="">Selecione el usuario</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>finca:</label>
                                <select name="idfinca" id="idfinca" class="form-control">
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Variedad:</label>
                                <select name="idvariead" id="idvariead" class="form-control">
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Nombre del Proceso:</label>
                                <input type="text" name="nompro" id="nompro" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Tipo de proceso:</label>
                                <input type="text" name="tipro" id="tipro" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fragancia / Aroma:</label>
                                <input type="text" name="frapro" id="fravar" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Sabor:</label>
                                <input type="text" name="sabpro" id="sabpro" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Acidez:</label>
                                <input type="text" name="acipro" id="acipro" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Cuerpo:</label>
                                <input type="text" name="cuepro" id="cuevar" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fotografia de referencia:</label>
                                <input type="file" name="proceso[]"  required class="form-control">
                            </div>    
                    </fieldset>
                    </div>
                <br>
                <input type="submit" id="botonReg" name="botonReg" value="Registrar" class="btn btn-success form-control">  
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="js/proceso.js"></script>
   </form>
</body>
</html>
<?php
if (isset($_POST['botonReg'])){
    $nomProce = $_POST['nompro'];
    $tiPro = $_POST['tipro'];
    $fraPro = $_POST['frapro'];
    $sabPro = $_POST['sabpro'];
    $aciPro = $_POST['acipro'];
    $cuePro = $_POST['cuepro'];
    $fotoPro = count($_FILES['proceso']['name']);
    $idVariedad= $_POST['idvariead'];
       try {
           $sql4 = "INSERT INTO `proceso`(`id_proceso`, `nombre_proceso`, `tipo_fer`, `fragancia_proceso`, `sabor_proceso`, `acidez_proceso`, `cuerpo_proceso`, `id_variedad`, `foto_proceso`, `ruta_proceso`) VALUES (NULL, ?,?,?,?,?,?,?,?,?)";
           $resultado4 = $cadena->prepare($sql4);
           /* $idVariedad= $cadena-> lastInsertId(); */
          for ($n=0; $n < $fotoPro; $n++) { 
                    $filename4 = $_FILES['proceso']['name'][$n];
                    $carpeta4 = 'fotografiaProceso/'.$filename4;
                    $file_extension4 = pathinfo($carpeta4, PATHINFO_EXTENSION);
                    $file_extension4 = strtolower($file_extension4);
                    $valid_extension4 = array("png", "jpeg", "jpg");
                    if (in_array($file_extension4, $valid_extension4)) {
                        if (move_uploaded_file($_FILES['proceso']['tmp_name'][$n],$carpeta4)) {
                            $resultado4 ->execute(array($nomProce, $tiPro, $fraPro, $sabPro, $aciPro, $cuePro, $idVariedad, $filename4, $carpeta4)); 
                            
                        }
                }
                }
        }catch (Exception $error) {
            die('Error en el registro de datos 4 '. $error->getMessage());
       } 
         ?>
          <script src="js/registro.js"></script>
         <?php  
}
?>