<?php  

// Llamando a los campos
ini_set ("sendmail_from","wwww.w-tech.com.mx");
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$affair = $_POST['affair'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "dinopiza@yahoo.com.mx,adrian@w-tech.com.mx";
$asunto = "Contacto de www.w-tech.com.mx";
$carta = "De: $nombre \n";
$carta .= "Asunto: $affair \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";
$carta .= date('j-n-Y');

// Enviando Mensaje
if(mail($destinatario,$asunto, $carta))
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="index.html"
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
            window.location="www.dent-salud.com.mx/#contact"
         </script>';
}
 ?>

