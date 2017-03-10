<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "info@wistion.com.mx";
$email_subject = "Contacto Wistion";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['subject']) ||
!isset($_POST['servicio']) ||
!isset($_POST['phone']) ||
!isset($_POST['message'])
) {

    echo '<script type="text/javascript">',
'toastr.success("Ocurrió un error favor de intentarlo de nuevo.");',
'</script>'
    ;
die();
}

$email_message = "Detalles del contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n"; //first_name
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['subject'] . "\n"; //telephone
$email_message .= "Servicio: " . $_POST['servicio'] . "\n";
$email_message .= "Telefono: " . $_POST['phone'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo '<script type="text/javascript">',
'toastr.success("Mensaje enviado con éxito, en un momento te antederemos.");',
'</script>'
;
}
?>