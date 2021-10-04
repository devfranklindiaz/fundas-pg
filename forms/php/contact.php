<?php
	if( isset($_POST['send']) ){
      $destinatario = "franklindg96@gmail.com"; 
      $remitente = $_POST['email'];
      /*$telefono = $_POST['telefono'];*/
      $asunto = "Te contactaron en el formulario de tu sitio web: ".$_POST['subject']. " Telefono de contacto: ".$_POST['telefono'];
      $mensaje = $_POST['name']." DIJO: \n".$_POST['message'];
      $headers = "From: $remitente\r\nReply-to: $remitente";
	  $mail = mail($destinatario, $asunto, $mensaje, $headers);
      header('Location: localhost/template/index.php?Enviado#contact');
    }else{
	header('Location: localhost/tmplate/index.php?Error#contact');
    };
?>