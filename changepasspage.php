<?php
require "app/Apis/database/Database.php";
require 'app/Apis/database/Config/Config.php';
$database = new Database($conn);
// require 'database/DataBase.php';
if (!isset($_GET['token']) or empty($_GET['token'])) {
    header("location:login");
} else {
    $token = $_GET['token'];
    $now = date("Y-m-d H:m:s");
    $val = $database->get_time($token);
    if (empty($val) or strtotime($val) < strtotime($now)) {
        $_SESSION['message'] = "<script>alert('Token access expired');</script>";
        header("location:login");

    }
}


require "loginhead.php";
?>
<div class="wrapper">
    <div class="maincontainer">
        <div class="slidecontainer">
            <img src="images/safe.png" alt="reset my password" width="100%" height="100%">
        </div>

        <div class="formcontainer">
            <br />
            <input type="hidden" id="token" value="<?php echo $token; ?>">
            <div class="formbody">
                <?php
require "changepassform.php";
?>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<br />

<?php
require "regfooter.php";
?>