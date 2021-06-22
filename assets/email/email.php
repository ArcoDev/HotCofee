<?php
$emailTest = "arcodev07@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$contentEmail = "Name: "  .$name.
                 "\nEmail:"  .$email.
                 "\nMessage: " .$message;

mail($emailTest, 'They sent a message from your website HotCoffee', $contentEmail);
