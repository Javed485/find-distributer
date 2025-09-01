<!-- Header -->
<?php include'layout/header.php'; ?>

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
                            <input id="login" name="login" class="formControl" placeholder="Email Your Email"></input>                    
                        </div>
                        <div class="FormGroup">
                            <p>OR</p>                 
                        </div>
                        <div class="FormGroup">
                        <input id="text" name="text" class="formControl" placeholder="Email Your Mobile No."></input>                    
                        </div>
                        <div class="FormGroup mt-3">
                            <input type="submit" id="submit" name="submit" class="signbtn" value="Forget Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include'layout/footer.php'; ?>