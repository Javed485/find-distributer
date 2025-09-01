<!-- Header -->
<?php include'layout/header.php'; ?>

<!-- User Profile -->
<section class="bodySec">
    <div class="container">
        
        <!-- Navbar -->
        <?php include'layout/second-navbar.php'; ?>
            
        <!-- Profile Form -->
        <div class="formSection">
            <form method="POST" action="#" enctype="multipart/form-data">
                <!-- Name -->
                <div class="FormGroup">
                    <div class="lableCnt"> 
                        <label>Enter your name 
                            <span class="text-danger"> *</span>
                        </label> 
                    </div>
                    <div class="inputCnt"> 
                        <input class="formControl" placeholder="Name" type="text"> 
                    </div>
                </div>
                <!-- Website -->
                <div class="FormGroup">
                    <div class="lableCnt"> 
                        <label>Website URL </label> 
                    </div>
                    <div class="inputCnt"> 
                        <input class="formControl" placeholder="Website link" type="text"> 
                    </div>
                </div>
                <!-- Phone -->
                <div class="FormGroup">
                    <div class="lableCnt"> 
                        <label>Phone 
                            <span class="text-danger"> *</span>
                        </label> 
                    </div>
                    <div class="inputCnt"> 
                        <input class="formControl" placeholder="Your No." type="text" required> 
                    </div>
                </div>
                <!-- Fax -->
                <div class="FormGroup">
                    <div class="lableCnt"> 
                        <label>Fax</label> 
                    </div>
                    <div class="inputCnt"> 
                        <input class="formControl" placeholder="Fax No." type="text"> 
                    </div>
                </div>
                <!-- City -->
                <div class="FormGroup">
                    <div class="lableCnt"> 
                        <label>City
                            <span class="text-danger"> *</span>
                        </label> 
                    </div>
                    <div class="inputCnt"> 
                        <input class="formControl" placeholder="City" type="text"> 
                    </div>
                </div>
                <!-- Address -->
                <div class="FormGroup">
                    <div class="lableCnt"> 
                        <label>Address
                            <span class="text-danger"> *</span>
                        </label> 
                    </div>
                    <div class="inputCnt"> 
                        <textarea id="address" name="address" class="formControl" placeholder="Address"></textarea>
                    </div>
                </div>
                <!-- Radio -->
                <div class="FormGroup mobileRadio">
                    <div class="lableCnt w-30"> 
                        <label>I am a</label> 
                    </div>
                    <div class="inputCnt w-70"> 
                        <div class="form-check-inline">
                            <label class="form-check-label radiobtn">
                                <input type="radio" class="form-check-input colorOragne" name="optradio">
                                <span class="distributors">Distributer</span>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label radiobtn">
                                <input type="radio" class="form-check-input colorGreen" name="optradio">
                                <span class="franchisees">Franchisee</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="FormGroup mt-5">
                    <div class="lableCnt none">&nbsp;</div>
                    <div class="inputCnt center"> 
                        <input type="submit" id="submit" name="submit" class="joinSubmitBtns" value="Update">
                    </div>
                </div>
            </form>               
        </div>
    </div>
</section>

<!-- Footer -->
<?php include'layout/footer.php'; ?>
