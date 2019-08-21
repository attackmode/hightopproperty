<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $postcode = $_POST['postcode'];


    $mailTo = 'info@hightopproperty.com';
    $headers = 'From: '.$email;
    $body ='Name: '.$name. ".\n\n" .'Email: '.$email. "\n\n" .'Phone: '.$phone. "\n\n" .'Post Code: '.$postcode  ;



    mail($mailTo, $headers, $body);
    header("Location:success.php");
}


if(isset($_POST['submit1'])){
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $msg = $_POST['msg'];


    $mailTo = 'info@hightopproperty.com';
    $headers = 'From: '.$email;
    $body ='Name: '.$name. ".\n\n" .'Email: '.$email. "\n\n" .'Message : '.$msg;



    mail($mailTo, $headers, $body);
    header("Location:success.php");
}
