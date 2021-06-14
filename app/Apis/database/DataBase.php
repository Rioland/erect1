<?php

require "sessionhelper.php";
class DataBase{

private $conn;
public function __construct($conn)
{
   $this->conn=$conn; 
}
    
public function get_token($table, $auth_token)
{
    require 'Config/Config.php';
    $qury = "SELECT $table FROM `users` WHERE $table=:token";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":token" => $auth_token));
    if ($stm->rowCount() >= 1) {
        return true;
    } else {
        return "invalid login details";
    }

}
public function get_time($auth_token)
{
    require 'Config/Config.php';

    $qury = "SELECT `token_date` FROM `users` WHERE `reset_pass_token` =:token";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":token" => $auth_token));
    if ($stm->rowCount() >= 1) {
        $res = $stm->fetch();
        return $res->token_date;

    } else {
        return "";
    }

}
public function get_email($table, $auth_email): bool
{
    require 'Config/Config.php';
    // require './Config/Config.php';

    $qury = "SELECT $table FROM `users` WHERE $table=:email";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":email" => $auth_email));
    if ($stm->rowCount() >= 1) {

        return true;
    } else {
        return false;
    }

}

public function updateToken($auth_token)
{
    require 'Config/Config.php';

    $v = true;
    $qury = "UPDATE `users` SET `is_verify`=:v WHERE `auth_token`=:token";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":v" => $v, ":token" => $auth_token));
    if ($stm->rowCount() >= 1) {

        return true;
    }
    return false;
}
public function updateresetToken($auth_token, $email)
{
    require 'Config/Config.php';

    $now = date("Y-m-d H:m:s");
    $time = date("Y-m-d H:i:s", strtotime('+1 hours'));

    $qury = "UPDATE `users` SET `token_date`=:tim,`reset_pass_token`=:t WHERE `email`=:email";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":t" => $auth_token, ":tim" => $time, ":email" => $email));
    if ($stm->rowCount() >= 1) {
        return true;
    }
    return false;
}

public function updatePassword($rest_token, $pass): string
{
    require 'Config/Config.php';

    $qury = "UPDATE `users` SET `password`=:p WHERE `reset_pass_token`=:token";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":p" => $pass, ":token" => $rest_token));
    if ($stm->rowCount() >= 1) {
        return true;
    }
    return false;
}

public function signin_user($email, $pass):bool
{
    require 'Config/Config.php';
    $qury = "SELECT `id` FROM `users` WHERE `email`=:email AND `password`=:pass";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":email" => $email, ":pass" => $pass));
    if ($stm->rowCount() >= 1) {
        $res = $stm->fetch();
        $_SESSION['userid'] = $res->id;
        return true;
    } else {
        return false;
    }
    return $pass;
}
public function google_register($name,$email, $pass, $country,$pic,$gender,$id):bool
{
    require 'Config/Config.php';
        $token = generate_token($email);
        $qury = "INSERT INTO `users`(`email`, `password`, `country`,`auth_token`,`id`,`name`,`gender`,`picture`) VALUES (:email,:password,:country,:token,:id,:name,:gend,:pic)";
        $stm = $conn->prepare($qury);
        $feildback = $stm->execute(array(":email" => $email, ":password" => $pass, ":country" => $country, ":token" => $token, ":id" => $id,":name"=>$name,":gend"=>$gender,":pic"=>$pic));
        $qury1 = "INSERT INTO `account`(`uid`, `dollar`, `euro`, `bit`, `eth`) VALUES (:uid,:dol,:euro,:btc,:eth)";

        $stm1 = $conn->prepare($qury1);
        $dollar = "0.00";
        $ero = "0.00";
        $btc = "0.00000000";
        $eth = "0.00000000";
        $feildback1 = $stm1->execute(array(":uid" => $id, ":dol" => $dollar, ":euro" => $ero, ":btc" => $btc, ":eth" => $eth));

        if ($feildback and $feildback1) {
            $sub = "Verification message from Erectone";

            $mess = "please click on the following link to verify your account http://" . $_SERVER['SERVER_NAME'] . '/erect1/verify.php?token=' . $token;
            send_mail($email, $mess, $sub);

            return true;
        } else {
            return false;

        }
// 
    // }

}

public function register($email, $pass, $country)
{
    require './Config/Config.php';

    $qury = "SELECT `id` FROM `users` WHERE `email`=:email ";
    $stm = $conn->prepare($qury);
    $stm->execute(array(":email" => $email));
    if ($stm->rowCount() >= 1) {

        return "Email already exist please login";
    } else {

        $id = str_shuffle(time());
        $token = generate_token($email);
        $qury = "INSERT INTO `users`(`email`, `password`, `country`,`auth_token`,`id`) VALUES (:email,:password,:country,:token,:id)";
        $stm = $conn->prepare($qury);
        $feildback = $stm->execute(array(":email" => $email, ":password" => $pass, ":country" => $country, ":token" => $token, ":id" => $id));
        $qury1 = "INSERT INTO `account`(`uid`, `dollar`, `euro`, `bit`, `eth`) VALUES (:uid,:dol,:euro,:btc,:eth)";

        $stm1 = $conn->prepare($qury1);
        $dollar = "0.00";
        $ero = "0.00";
        $btc = "0.00000000";
        $eth = "0.00000000";
        $feildback1 = $stm1->execute(array(":uid" => $id, ":dol" => $dollar, ":euro" => $ero, ":btc" => $btc, ":eth" => $eth));

        if ($feildback and $feildback1) {
            $sub = "Verification message from Erectone";

            $mess = "please click on the following link to verify your account http://" . $_SERVER['SERVER_NAME'] . '/erect1/verify/' . $token;
            send_mail($email, $mess, $sub);

            return true;
        } else {
            return "Error in registeration contact the admin";

        }

    }

}
public function search_market($search)
{

}
public function insert_merket(
    $description,
    $circulating_supply, $cmc_rank, $date_added, $last_updated, $max_supply, $num_market_pairs,
    $platform,
    $market_cap,
    $percent_change_1h,
    $percent_change_7d,
    $percent_change_24h,
    $percent_change_30d,
    $percent_change_60d,
    $percent_change_90d,
    $price,
    $volume_24h,
    $slug,
    $symbol,
    $id,
    $name,
    $total_supply, $logo) {
    require './Config/Config.php';

// $circulating_supplytotal_supply=$_POST['circulating_supply'];

    $query = "INSERT INTO `market`(`id`, `name`, `last_updated`, `market_cap`, `percent_change_1h`, `percent_change_7d`, `percent_change_24h`,
        `percent_change_30d`, `percent_change_60d`, `percent_change_90d`, `volume_24h`, `slug`, `symbol`,
        `circulating_supply`, `cmc_rank`, `date_added`, `currency`, `max_supply`, `num_market_pairs`,
        `platform`, `total_supply`,`price`,`logo`)
        VALUES (:id,:name,:lasup,:macap,:per1h,:per7d,:per24h,:per30d,:per60d,:per90d,:vol24,:slu,:simb,:calcu,:cmc,:ddad,:curre,:maxsup,:num_mak,:plat,:totsup,:price,:logo)";
    $req = $stm = $conn->prepare($query);
    $stm->execute([':id' => $id, ':name' => $name, ':lasup' => $last_updated, ':macap' => $market_cap, ':per1h' => $percent_change_1h, ':per7d' => $percent_change_7d, ':per24h' => $percent_change_24h,
        ':per30d' => $percent_change_30d, ':per60d' => $percent_change_60d,
        ':per90d' => $percent_change_90d, ':vol24' => $volume_24h, ':slu' => $slug, ':simb' => $symbol,
        ':calcu' => $circulating_supply,
        ':cmc' => $cmc_rank, ':ddad' => $date_added, ':curre' => "USD", ':maxsup' => $max_supply, ':num_mak' => $num_market_pairs,
        ':plat' => $platform,
        ':totsup' => $total_supply,
        ':price' => $price,
        ':logo' => $logo]);

    // $stm->bind_param("ssssssssssssssssssssssss",
    //     $id, $name, $last_updated, $market_cap, $percent_change_1h, $percent_change_7d, $percent_change_24h, $percent_change_30d, $percent_change_60d, $percent_change_90d, $volume_24h, $slug, $symbol, $circulating_supply, $cmc_rank, $date_added, "USD", $max_supply, $num_market_pairs, $platform, $total_supply, $price,$logo,$description
    // );

    if ($req == true) {
        return true;
    }
    return false;

}

public function get_coin_icon($id)
{
    header('Content-type: application/json');
// $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/info";
    $parameters = [
        // 'start' => '1',
        // 'limit' => '20',
        'id' => "1027",
        'aux' => "logo",

    ];

    $headers = [
        'Accepts: application/json',
        'X-CMC_PRO_API_KEY: eadd6a85-8d92-4b85-9eba-f4a18e24aa18',
    ];
    $qs = http_build_query($parameters); // query string encode the parameters
    $request = "{$url}?{$qs}"; // create the request URL

    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => $request, // set the request URL
        CURLOPT_HTTPHEADER => $headers, // set the headers
        CURLOPT_RETURNTRANSFER => 1, // ask for raw response instead of bool
    ));

    $response = curl_exec($curl); // Send the request, save the response
    $json = $response . PHP_EOL; // print json decoded response

    return $json;
//
    curl_close($curl); // Close request

}
public function getMarketCap()
{
    header('Content-type: application/json');
    $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    // $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/info";
    $parameters = [
        'start' => '1',
        'limit' => '20',
        'convert' => 'USD',
    ];

    $headers = [
        'Accepts: application/json',
        'X-CMC_PRO_API_KEY: eadd6a85-8d92-4b85-9eba-f4a18e24aa18',
    ];
    $qs = http_build_query($parameters); // query string encode the parameters
    $request = "{$url}?{$qs}"; // create the request URL

    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => $request, // set the request URL
        CURLOPT_HTTPHEADER => $headers, // set the headers
        CURLOPT_RETURNTRANSFER => 1, // ask for raw response instead of bool
    ));

    $response = curl_exec($curl); // Send the request, save the response
    return $response; // print json decoded response

    curl_close($curl); // Close request

}
}

// $database = new Database($conn);