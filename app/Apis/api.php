<?php
require "database/Config/Config.php";
require 'database/DataBase.php';

$database = new DataBase($conn);
if (isset($_POST['action']) and $_POST['action'] == "register") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $country = $_POST['country'];
    $response = $database->register($email, $pass, $country);
    echo $response;

} else if (isset($_POST['action']) and $_POST['action'] == "login") {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $response = $database->signin_user($email, $pass);
    echo $response;

} else

if (isset($_POST['action']) and $_POST['action'] == "reset") {
    $email = $_POST['email'];

    $isValidemail = $database->get_email("email", $email);
    if ($isValidemail) {
        $token = generate_token($email);
        $updateToken = $database->updateresetToken($token, $email);
        if ($updateToken) {
            $sub = "Password reset message from Erectone";
            $mess = "please click on the following link to reset your account password http://" . $_SERVER['SERVER_NAME'] . '/erect1/verifypassword/' . $token . " please ignore if you are not the one that requested for the password reset";
            $isSendMail = send_mail($email, $mess, $sub);
            if ($isSendMail) {
                echo "email has been sent to " . $email;
            } else {
                echo "email can not be sent for now try later";
            }

        } else {
            echo "You can not reset your password base on some security policy contact the costumer care";
        }

    } else {
        echo "Invalid Email Address";
    }

} else

if (isset($_POST['action']) and $_POST['action'] == "newpassword") {
    $password = $_POST['password'];
    $token = $_POST['token'];

    echo $database->updatePassword($token, $password);

}