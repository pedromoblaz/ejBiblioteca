<?php
  /**Cargo la conexion a la BD**/
  require_once("bd.php");

  /**ZONA DE RECUPERACION DE CAMPOS DEL FORMULARIO**/

  //Por hacer

  /**FIN DE ZONA**/

  /**ZONA DE INSERCION EN LA BD**/
  try{
    $nombre_editorial=utf8_encode("Gráficas Pérez");
    $conexion->query("INSERT INTO editorial (nombre) VALUES ('$nombre_editorial')");
    echo "<br>INSERCION REALIZADA";
  }catch(PDOException $error){
    echo $error->getMessage();
  }
 ?>
