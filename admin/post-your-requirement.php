<!-- Header -->
<?html include'layout/header.html'; ?>

<!-- Post Your Requirement -->
<section class="bodySec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="postContainer">
                    <h4 class="head">Post Your Requirement</h4>
                    <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="FormGroup">
                            <select name="annual_sale_unit" class="formControl"> 
                                <option value="" id="annual_sale_id">Select Your Option</option>
                                <option value="K">K</option>
                                <option value="Lac">Lac</option>
                                <option value="Cr">Cr</option> 
                            </select>                    
                        </div>
                        <div class="FormGroup">
                            <textarea id="address" name="address" class="formControl" placeholder="Description"></textarea>                    
                        </div>
                        <div class="FormGroup text-center">
                            <input type="submit" id="submit" name="submit" class="joinSubmitBtns" value="Ask Our Experts">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?html include'layout/footer.html'; ?>