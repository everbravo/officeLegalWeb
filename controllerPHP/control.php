<?php
$sujeto = @$_POST["Nombres"];
$asunto = @$_POST["Asunto"];
$emailSujeto = @$_POST["Email"];
$cuerpoMSG = @$_POST["mensaje"];
$predicado = "alexbraver333@gmail.com";
$contenido = "Nombre: ". $sujeto ."\nCorreo: " . $emailSujeto . "\nMensaje:  " . $cuerpoMSG;
$resp = mail($predicado, $asunto, $contenido);
if($resp = true){
    header("Location: ../index.html?msg enviado");
}else{
    header("Location: ../index.html?msg no enviado");
}

?>