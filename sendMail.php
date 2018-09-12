<?php
 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $mail;
    $to = "alexis.gruny60@gmail.com";
    $headers = "From:" . $mail;
    $message = $lastName . " " . $phone . " " . $country . " " . $message;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
?>

