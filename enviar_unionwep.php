<?php

function email_unionwep($post_ID)  {
    $titulo = $_GET['titulo'];
    $correos_unionwep = 'unionwep@gmail.com';
    $link = $_GET['link'];
    $titulo_entrada = $_GET['titulo_entrada'];
    $cabecera = 'MIME-Version: 1.0' . "\r\n";
    $cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
    mail($correos_unionwep, "INSPIRED. Publicacion de $titulo" ,"

<p>El blog <b>$titulo</b> requiere una actualización en INSPIRED con la siguiente información:</p>

<p>El Link del post es: $link </p>

", $cabecera);
    return $post_ID;
}

email_unionwep('enviar por mail');


?>

<div align="center">
<p>
We have to check that everything is correct before publication. Thanks for submitting your update to Unionwep.
</p>

<p>
Tenemos que comprobar que todo esta correcto antes de su publicacion. Gracias por enviar su actualizacion a Unionwep.
</p>

<p>
<a href="javascript:close()">Cerrar ventana</a>
</p>
</div>