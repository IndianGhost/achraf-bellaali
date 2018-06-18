<?php

function sendMeMail($name, $email, $phone=null, $message=null){
    $to      = 'achraf.bellaali@gmail.com';
    $subject = 'New lead achrafbellaali.com';
    $message = 'You had just received a new lead on your website !'."\r\n" .
        'Name  : '.$name."\r\n" .
        'Email : '.$email."\r\n" .
        'Phone  : '.$phone."\r\n" .
        'Message : '.$message
    ;
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $success = mail($to, $subject, $message, $headers);
    return $success;
}

if(isset($_POST['name']) && isset($_POST['email'])){
    $name       =   $_POST['name'];
    $email      =   $_POST['email'];
    $phone      =   isset( $_POST['phone'] )? $_POST['phone'] : '';
    $message    =   isset( $_POST['message'] )? $_POST['message'] : '';
    $success    =   sendMeMail($name, $email, $phone, $message);
    $statut     =   $success? '1' : '0';
}
else{
    $statut = '0';
}
header('Location: /?success='.$statut);