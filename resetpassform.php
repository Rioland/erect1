     <!-- ---- form container ----  -->
     <div class="form-main-wrapper">
         <!-- ----- the mini display head ----  -->
         <div class="min-display w3-container">
             <label class="w3-left">
                 <img src="images/logo.png" alt="logo" width="auto" height="80px">
             </label>
             <label class="w3-right">
                 <a class="back" href="login">
                     <h3 class="back"><i class="fa fa-angle-double-left back1"></i>&nbsp; Sign In</h3>
                 </a>
             </label>
         </div>
         <!-- ----- the max display head ----  -->
         <div class="max-display">
             <a class="back" href="login">
                 <h3 class="back"><i class="fa fa-angle-double-left back1"></i>&nbsp; Sign In</h3>
             </a>
         </div>
         <!-- --- the Topic -- -- -->
         <h1 class="topic"> RESET YOUR PASSWORD </h1>
         <!-- ---- sub topic ---  -->
         <h2 class="sub-topic">
             To reset your password, enter the email address you use to sign in to ERECTONE account
         </h2>

         <br /> <br />
         <!-- --- Form container -- ---  -->
         <div class="formwrapper">
             <form>
                 <!-- ----- ----- Email Address --- ----  -->
                 <div class="group">
                     <input class="input" type="email" id="emailrr" required>
                     <span class="highlight"></span>
                     <span class="bar"></span>
                     <label class="w3-padding-large label">Email Address</label>
                 </div>

                 <!-- --- submit button ----  -->
                 <p class="btncon"><button id="restbtn"
                         class="w3-button w3-teal w3-round-large w3-hover-light-blue submitbtn" type="button">
                         <label class="restbtn" id="restbtn"> Submit </label>
                         <img style="display: none;" id="loadingrr" src="images/loading.webp" width="30px"
                             height="30px" />


                     </button>
                 </p>
                 <br />
             </form>


             <br />

         </div>
     </div>