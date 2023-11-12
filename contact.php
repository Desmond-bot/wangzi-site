<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name']
    $mailForm = $_POST['mail']
    $phoneNumber = $_POST['phone']
    $message = $_POST['message']

    $mailTo = "desmondsean75@gmail.com";
    $headers = "From: ".$mailFrom
    $txt = "You have a message ".$name".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: index.html?MessageSent");

}

?>