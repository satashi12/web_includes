<?php
function sendVerificationEmail($email, $token) {
    $subject = 'Verify Your Email';
    $message = 'Click this link to verify your email: http://yourdomain.com/verify.php?token=' . $token;
    $headers = 'From: noreply@yourdomain.com' . "\r\n";

    mail($email, $subject, $message, $headers);
}
?>
