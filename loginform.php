    <!-- ---- form container ----  -->
    <div class="form-main-wrapper">
        <!-- ----- the mini display head ----  -->
        <div class="min-display w3-container">
            <label class="w3-left">
                <img src="./images/logo.png" alt="logo" width="auto" height="80px">
            </label>
            <label class="w3-right">
                <a class="back" href="home">
                    <h3 class="back"><i class="fa fa-angle-double-left back1"></i>&nbsp; Back to main</h3>
                </a>
            </label>
        </div>
        <!-- ----- the max display head ----  -->
        <div class="max-display">
            <a class="back" href="home">
                <h3 class="back"><i class="fa fa-angle-double-left back1"></i>&nbsp; Back to main</h3>
            </a>
        </div>
        <!-- --- the Topic -- -- -->
        <h1 class="topic"> Sign-In to your account </h1>
        <!-- ---- sub topic ---  -->
        <p>
            Securely buy crypto and start trading on a trusted exchange
        </p>

        <br /> <br />
        <!-- --- Form container -- ---  -->
        <div class="formwrapper">
            <form>
                <!-- ----- ----- Email Address --- ----  -->
                <div class="group">
                    <input class="input" type="text" id="email" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="w3-padding-large label">Email Address</label>
                </div>
                <!--- --- Password selection ----- ------  -->
                <div class="group">
                    <input class="input" type="text" id="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="w3-padding-large label">Password</label>
                </div>
                <a href="forgetpassword">
                    <p class="txt"> Forgot your password? </p>
                </a>
                <!-- --- submit button ----  -->
                <p class="btncon"><button id="logbtn"
                        class="w3-button w3-teal w3-round-large w3-hover-light-blue submitbtn" type="button">
                        <label id="logbtn" class="logbtn">Sign
                            In </label>
                        <img style="display: none;" id="loading" src="images/loading.webp" width="30px" height="30px" />


                    </button>
                </p>
                </p>
                <br />
            </form>

            <div class="loginoption">
                <div class="left-line"></div>
                <div class="alter-sign-in">
                    <h2>or sign in with</h2>
                </div>
                <div class="right-line"></div>
            </div>

            <div class="loginoptionbar">
                <div class="w3-padding">
                    <a href="#" class="fa fa-facebook"></a>
                </div>

                <div class="w3-padding">
                    <a href="<?php echo $client->createAuthUrl(); ?>" class="fa fa-google"></a>
                </div>
            </div>
            <br />
            <p class="bftxt">We'll never post anything without your permission...</p>
            <br />
            <p class="lgtxt"> Don't have an account? <b><a href="signup"> Create account </a></b></p>

        </div>
    </div>