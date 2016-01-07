<?php
$to      = 'amittallapragada@gmail.com';
$subject = 'Amit is not the master.';
$message = 'Vikas is the crassliest fella alive!';
$headers = 'From: vkas15@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>