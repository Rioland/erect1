<?php
function get_contry(){
 $user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];
return $country;

}
function is_login()
{
 
    if (isset($_SESSION["userid"]) and !empty($_SESSION["userid"])) {
        return true;
    }
    return false;
}

function generate_token($value)
{
    return str_shuffle(md5($value));
}

function send_mail($reciver, $message, $subject)
{

    require 'phpmailer/class.phpmailer.php';
    $frommail = "riolandadedamola@gmail.com";
    $fromname = "Erectone";
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->Username = "riolandadedamola@gmail.com";
    $mail->Password = "08132770664";
    $mail->Host = "smtp.gmail.com";
    $mail->Mailer = "smtp";
    $mail->SetFrom($frommail, $fromname);
    $mail->AddReplyTo($frommail, $fromname);
    $mail->AddAddress($reciver);
    $mail->Subject = $subject;
    $mail->WordWrap = 80;
    $mail->MsgHTML($message);

    $mail->IsHTML(true);

    if (!$mail->Send()) {
        return false;
    } else {
        return true;
    }

 } 