<?php
  $destino = "edgardobeltran527@gmail.com"
  $email = $_POST["email"];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $mensaje = $_POST["mensaje"];
  $motivo = $_POST["motivo"];

  
  $contenido = "E-mail: " . $email . "\n Nombre: " .$nombre . "\n Apellido: "  . $apellido "\n Mensaje: " . $mensaje . "\n Motivo: " .$motivo;

  mail($destino, $motivo, $contenido);
  header("Location: gracias.html ")
?>