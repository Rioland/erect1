<?php
require("loginhead.php");
?>
<div class="wrapper">
    <div class="maincontainer">
        <div class="slidecontainer">
            <img src="images/safe.png" alt="reset my password" width="100%" height="100%">
        </div>

        <div class="formcontainer">
            <br />
            <div class="formbody">
                <?php
                require("resetpassform.php");
                ?>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<br />

<?php
require("regfooter.php");
?>