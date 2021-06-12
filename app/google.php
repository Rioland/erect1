<?php

require 'vendor/autoload.php';
require "Apis/database/Config/Config.php";

require "./Apis/database/DataBase.php";

$db = new DataBase($conn);

// init configuration
$clientID = '818881695167-96f0chbv1pctnltdcf2n8kunrkctqei3.apps.googleusercontent.com';
$clientSecret = 'rdquOpaJHjbW3Qkbs-6tM97G';
$redirectUri = 'http://localhost/erect1/app/google.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
// print_r(get_contry());

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email = $google_account_info->email;
    $name = $google_account_info->name;
    $gender = $google_account_info->gender;
    $image = $google_account_info->picture;
    $id = $google_account_info->id;
    $locale = get_contry() != null ? get_contry() : "not set";
    // print_r(get_contry());
    $isActive = $db->signin_user($email, $id);

    if ($isActive) {
        header("location:../dashboard");
    } else {
        $valu = $db->google_register($name, $email, $id, $locale, $image, $gender, $id);
        if($valu){
           header("location:./dashboard"); 
        }else{
            header("location:../login");

        }
    }

    // now you can use this profile info to create account in your website and make user logged in.
} else {
    // echo "<a href='" . $client->createAuthUrl() . "'>Google Login</a>";
}