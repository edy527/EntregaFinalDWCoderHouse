<?php
  $destino = "edgardobeltran527@gmail.com";
  $email = $_POST["email"];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $mensaje = $_POST["mensaje"];
  /* $motivo = $_POST["motivo"]; */

  
  $contenido = "E-mail: " . $email . "\nNombre: " . $nombre . "\nApellido: " . $apellido "\nMensaje: " . $mensaje;

  mail($destino, $contenido);
  header("Location:gracias.html");



  
?>