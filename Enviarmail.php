<?php

 $Asunto=$_POST["Asunto"];
 $nombre=$_POST["nombre"];
 $email=$_POST["email"];
 $mensaje=$nombre . "/n"$_POST["mensaje"];
 
 mail("oscarivanb69@gmail.com", $asunto, $mensaje, "FROM: $email");
 
  echo "<script> alert(El mensaje fue enviado);</script>";
 
 header("Location: contactenos.html");
?>
