<!-- Header -->
<?html include'layout/header.html'; ?>

<!-- Post Your Requirement -->
<section class="bodySec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4">
                <div class="loginContainer">
                    <form method="POST" action="#">
                        <div class="defaultUser">
                            <img src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745" alt="">
                        </div>
                        <div class="FormGroup">
                            <input id="login" name="login" class="formControl" placeholder="Email or Username"></input>                    
                        </div>
                        <div class="FormGroup">
                            <input id="password" name="password" class="formControl" placeholder="******"></input>                    
                        </div>
                        <div class="rememberMe">
                            <div class="checkbox checkbox-default"> 
                                <input type="checkbox" name="remember_me" id="rememberme"> 
                                <label for="rememberme" class="pl-1">Remember me</label> 
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" checked="" style="width: 15px; height: 15px; margin-top: 0;">
                            </div>
                            <div class="d-flex ml-1">
                                <img alt="watsapp" width="17" height="17" src="assets/images/svg/watsapp-logo.svg">
                                <p class="dXwXVd ml-1 text-left">Would you like to get updates over Whatsapp</p>
                            </div>
                        </div>
                        <div class="FormGroup">
                            <input type="submit" id="submit" name="submit" class="signbtn" value="Sign In">
                        </div>
                        <p class="forgotPass"> <a href="forget-password.html">Forgot Your Password ?</a> </p>
                    </form>
                </div>
                <div class="createAccount text-center"> New User? <a href="../joinfree.html">Join Free</a> </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?html include'layout/footer.html'; ?>