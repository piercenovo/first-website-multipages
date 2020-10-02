<?php
    $destinatario = 'piercenh17@gmail.com';

    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $movil = $_POST['phone'];
    $mensaje = $_POST['message'];

    $header = "Enviado desde Kolibrí Consulting";
    $mensajeCompleto = $mensaje . "\Atentamente: " . $nombre;

    mail($destinatario, $mensaje, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

