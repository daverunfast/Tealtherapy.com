<?php
header('location:index.html');

if($_POST["submit"]) {
    $recipient="kelly@tealtherapy.com";
    $subject="Message submitted via TealTherapy.com";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\n Email: $senderEmail\n Message: $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

}
?>
