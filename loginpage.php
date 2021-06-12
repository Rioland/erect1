<?php
require './app/vendor/autoload.php';

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

require "./loginhead.php";
?>

<div class="wrapper">
    <div class="maincontainer">
        <div class="slidecontainer">
            <div class="w3-display-container">
                <img src="./images/loginpic.png" class="loginpic" alt="loginPhoto" width="100%" height="100%">
                <div class="w3-display-middle w3-large">
                    <h1 class="lgcentrapic">Crypto exchange you can trust</h1>
                </div>
            </div>
        </div>

        <div class="formcontainer">
            <br />
            <div class="formbody">
                <?php
                require("./loginform.php");
                ?>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<br />
<?php
require("./regfooter.php");
?>