<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$mensaje=$_POST['mensaje'];

$valor='https://api.whatsapp.com/send?phone=573195223935&text=Hola mi nombre es *'.$nombre.'* me gustaría saber más sobre las licencias estos son mis datos: *Correo:* '. $email.', *Teléfono*: '.$telephone.', *Mensaje:* '. $mensaje;
?>

<META   HTTP-EQUIV="refresh" CONTENT="0;URL=<?php echo $valor; ?> " target="_blank">



