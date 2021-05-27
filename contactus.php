<?php
 if(isset($_POST['send'])){
     $name = $_POST['Name'];
     $email= $_POST['Sender'];
     $subject= $_POST['Subject'];
     $message= $_POST['Message'];
     $from = "ronakadroja89@gmail.com";
     $to = "ronakadroja1234@gmail.com";
     $email_subject = "New form submitted from portfolio.";
     $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " .$subject . "\r\n  Message =" . $message;
     $headers = "From: " . $from . " \r\n Reply to: " . $email;
     if($email!=NULL){
         mail("ronakadroja1234@gmail.com", $email_subject, $txt, $headers);
         header("Location: thankyou.html");
        }
    }
?>