<?php
if (isset($_Post['submit'])) {
    $name = $_Post['name'];
    $email = $_Post['email'];
    $subject = $_Post['subject'];

    $to = "rzltdarkness@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$name.".\n\n".$subject;

    mail($to, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>