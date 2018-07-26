<?php
if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $message  = $_POST['text'];
    $subject = "chaletsdesbouleaux.com message de: $name";

    $headers = "" .
        "Reply-To:" . $email . "\r\n" .
        "From:" . $email . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    //send email   
    mail("chaletsdesbouleaux@gmail.com", $subject, $message, $headers);
}

?>
