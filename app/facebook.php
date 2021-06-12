<?php

use DataBase;
use Facebook\FacebookRequest;
use Facebook\Helpers\FacebookRedirectLoginHelper;
session_start();

require 'vendor/autoload.php';
require "Apis/database/Config/Config.php";

require "./Apis/database/DataBase.php";

$db = new DataBase($conn);
$url = "http://localhost/erect1/app/facebook.php";
$secrit="174465544659598";
$appid="2d86a2195bf92a7515065c69d1041221";
$fb = new \Facebook\Facebook([
    'app_id' => $appid, //Replace {your-app-id} with your app ID
    'app_secret' => $secrit, //Replace {your-app-secret} with your app secret
    'graph_api_version' => 'v5.0',
]);