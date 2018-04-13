<?php
  /********Acceso a MySQL según PDO**********/
  $conexion=false;
  //Conexion local
  //$host="localhost";
  //$dbname="biblioteca";
  //$user = "root";
  //$pass = "";
  //Conexion remota del profe
  $host="rdbms.strato.de";
  $dbname="DB3334152";
  $user = "U3334152";
  $pass = "arr1quitaun";

  $dsn = "mysql:host=$host;dbname=$dbname";
  try{
    $conexion = new PDO( $dsn, $user, $pass );
    echo "CONEXION ESTABLECIDA";
  }catch(PDOException $error){
    echo "ERROR DE CONEXION: ".$error->getMessage();
  }

  /**A partir de aquí son pruebas */
  /*$sql = "SELECT * FROM country";
  $resultado=$conexion->query($sql);
  foreach($resultado as $fila){
    echo $fila['Name'];
  }*/
  /*$sql = "SELECT * FROM country WHERE population>?";
  $consulta = $conexion->prepare($sql);
  $consulta->bindValue(1,300000000,PDO::PARAM_INT);
  $consulta->execute();
  $resultado = $consulta->fetchAll();
  foreach($resultado as $fila){
    echo $fila['Name'];
  }*/
  /**FIN DE PRUEBAS**/


?>
