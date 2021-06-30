<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];

    $to = "ronakadroja1234@gmail.com";
    $mail_subject = "Message from Portfolio";
    $email_message = "Hello, Ronak,\n Name : $Name \n Email : $Email \n Subject : $Subject \n Message : $Message" ;
    $from = "From: ronakadroja89@gmail.com";
    

    if (mail($to, $mail_subject, $email_message, $from)) {
        header("location: thankyou.html");
    } else {
        echo "not send";
        // header("location: mail.php");
    }
}

?>
