<!-- Header -->
<?php include'layout/header.php'; ?>
    
<!-- My Distributer Content -->
<section class="bodySec">
    <div class="container">
        
        <!-- Navbar -->
        <?php include'layout/second-navbar.php'; ?>
        
        <!-- Profile Form -->
        <div class="formContainer m-padding">
            <h3 class="dis-heading">Add a new Product</h3>
            <div class="formSection productSection">
                <form class="myeditForm" method="POST" action="#" enctype="multipart/form-data">
                    <!-- Product Number -->
                    <h6 class="pro-heading">Product 1</h6>
                    <!-- First Form section -->
                    <div class="inputField">
                        <!-- Choose Category -->
                        <div class="FormGroup">
                            <div class="lableCnt"> 
                                <label>Choose Category 
                                    <span class="text-danger"> *</span>
                                </label> 
                            </div>
                            <div class="inputCnt"> 
                                <select name="annual_sale_unit" class="formControl"> 
                                    <option value="" id="annual_sale_id">Select Category</option>
                                    <option value="K">K</option>
                                    <option value="Lac">Lac</option>
                                    <option value="Cr">Cr</option> 
                                </select>  
                            </div>
                        </div>

                        <!-- Choose Sub Category -->
                        <div class="FormGroup">
                            <div class="lableCnt"> 
                                <label>Choose Sub Category 
                                    <span class="text-danger"> *</span>
                                </label> 
                            </div>
                            <div class="inputCnt"> 
                                <input class="formControl" placeholder="Search Keyword" type="text"> 
                            </div>
                        </div>

                        <!-- Upload Image -->
                        <div class="FormGroup">
                            <div class="lableCnt"> 
                                <label>Upload Image 
                                    <span class="text-danger"> *</span>
                                </label> 
                            </div>
                            <div class="inputCnt"> 
                                <input multiple="" name="attach_file" class="inputfile" type="file"> 
                                <label for="file-1">
                                    <i class="fa fa-upload"></i> 
                                    <span style="display:inline-block;">Choose a file…</span>
                                </label>
                            </div>
                        </div>

                        <!-- Product Name -->
                        <div class="FormGroup">
                            <div class="lableCnt"> 
                                <label>Product Name
                                    <span class="text-danger"> *</span>
                                </label> 
                            </div>
                            <div class="inputCnt"> 
                                <input class="formControl" type="text"> 
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="FormGroup">
                            <div class="lableCnt"> 
                                <label>Description </label> 
                            </div>
                            <div class="inputCnt"> 
                                <textarea name="remarks" id="remark" class="formControl heightTextarea" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Show in porta -->
                        <div class="FormGroup d-row">
                            <div class="lableCnt"> 
                                <label>Show in porta </label> 
                            </div>
                            <div class="inputCnt"> 
                                <div class="checkbox checkbox-default checkbox-inline"> 
                                    <input type="checkbox" name="state"> 
                                </div>
                            </div>
                        </div>

                        <!-- Mark Featured -->
                        <div class="FormGroup d-row">
                            <div class="lableCnt"> 
                                <label>Mark Featured </label> 
                            </div>
                            <div class="inputCnt"> 
                                <div class="checkbox checkbox-default checkbox-inline"> 
                                    <input type="checkbox" name="state"> 
                                </div>
                            </div>
                        </div>

                        <!-- Sequence No -->
                        <div class="FormGroup">
                            <div class="lableCnt"> 
                                <label>Sequence No. </label> 
                            </div>
                            <div class="inputCnt"> 
                                <select name="annual_sale_unit" class="formControl"> 
                                    <option value="" id="annual_sale_id">Select Category</option>
                                    <option value="K">K</option>
                                    <option value="Lac">Lac</option>
                                    <option value="Cr">Cr</option> 
                                </select>  
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="FormGroup mt-5">
                        <div class="lableCnt none">&nbsp;</div>
                        <div class="inputCnt center"> 
                            <input type="submit" id="submit" name="submit" class="joinSubmitBtns colorGreen" value="SUBMIT">
                        </div>
                    </div>
                </form>               
            </div>           
        </div>

    </div>
</section>


<!-- Footer -->
<?php include'layout/footer.php'; ?>






