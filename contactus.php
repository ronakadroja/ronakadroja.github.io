<?php

$EmailFrom = "ronakadroja89@gmail.com";
$EmailTo = "ronakadroja1234@gmail.com";

$subject = "New Message from Portfolio.";
$Name = Trim(stripslashes($_POST['Name']));
$Email = Trim(stripslashes($_POST['Sender']));
$Subject = Trim(stripslashes($_POST['Subject']));
$Message = Trim(stripslashes($_POST['Message']));

$validationOK=true;
if(!validationOK){
    print "<meta http-equvia=\"refresh\" content=\"0,URL=error.htm\">";
    exit;
}

$Body ="";
$Body = "
'
Name : $Name
Email : $Email
Subject : $Subject
Message : $Message
'
";

$success = mail($EmailTo, $subject, $Body, "From : <$EmailFrom>", "Reply to : <$Email>");
if($success){
    print "<meta http-equvia=\"refresh\" content=\"0,URL=thankyou.html\">";
}
else{
    print "<meta http-equvia=\"refresh\" content=\"0,URL=error.htm\">";
}

?>