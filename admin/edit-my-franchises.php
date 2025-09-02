<!-- Header -->
<?html include'layout/header.html'; ?>
    
<!-- My Distributer Content -->
<section class="bodySec">
    <div class="container">
        
        <!-- Navbar -->
        <?html include'layout/second-navbar.html'; ?>
        
        <!-- Profile Form -->
        <div class="formContainer m-padding">
            <h3 class="dis-heading">Please choose your option</h3>  
            <div class="formSection form-padding">
                <form class="myeditForm" method="POST" action="#" enctype="multipart/form-data">
                    <!-- Radio Distributer -->
                    <div class="formSectionCnt">
                        <div class="lookingFor">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input franchiseAppoint" name="optradio">
                                    <span>I want to appoint Franchises </span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input franchiseBecome" name="optradio">
                                    <span>I want to become a Franchises</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="contents">
                        <!-- Basic Details -->
                        <div class="heading">Basic Franchisor Details</div>
                        <!-- First Form section -->
                        <div class="inputField">
                            <!-- Brand Name -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Brand Name 
                                        <span class="text-danger"> *</span>
                                    </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder="NamePlease mention brand name if available" type="text"> 
                                </div>
                            </div>

                            <!-- Business Start Year -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Business Start Year </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder="e.g. 1972" type="text"> 
                                </div>
                            </div>

                            <!-- Total No. of Company -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Total No. of Company</label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder="In Number" type="text"> 
                                </div>
                            </div>

                            <!-- Total No. of Franchises -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Total No. of Franchise</label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder=" In numbers " type="text"> 
                                </div>
                            </div>

                            <!-- Product Keyword -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Product Keyword
                                        <span class="text-danger"> *</span>
                                    </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <textarea id="address" name="address" class="formControl" placeholder="Address"></textarea>
                                </div>
                            </div>

                            <!-- Space (sq ft) -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Space <span>(sq ft)</span></label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder="Space required by Franchise" type="text"> 
                                </div>
                            </div>

                            <!-- Investment Details  -->
                            <div class="FormGroup franchisebecomeForm">
                                <div class="lableCnt"> 
                                    <label>Investment Details
                                        <span class="text-danger"> *</span>
                                    </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <textarea id="address" name="address" class="formControl"></textarea>
                                </div>
                            </div>

                            <!-- Investment Capacity -->
                            <div class="FormGroup franchisebecomeForm">
                                <div class="lableCnt"> 
                                    <label>Investment Capacity </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <select name="annual_sale_unit" class="formControl"> 
                                        <option value="" id="annual_sale_id">--Select Range--</option>
                                        <option value="K">K</option>
                                        <option value="Lac">Lac</option>
                                        <option value="Cr">Cr</option> 
                                    </select>  
                                </div>
                            </div>

                            <!-- How soon would you like to invest ? -->
                            <div class="FormGroup franchisebecomeForm">
                                <div class="lableCnt"> 
                                    <label>How soon would you like to invest ? 
                                        <span class="text-danger"> *</span>
                                    </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <select name="annual_sale_unit" class="formControl"> 
                                        <option value="" id="annual_sale_id">--Select--</option>
                                        <option value="K">K</option>
                                        <option value="Lac">Lac</option>
                                        <option value="Cr">Cr</option> 
                                    </select>  
                                </div>
                            </div>

                            <!-- PAN No. -->
                            <div class="FormGroup franchisebecomeForm">
                                <div class="lableCnt"> 
                                    <label>PAN No.</label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder="Enter Pan No." type="text"> 
                                </div>
                            </div>

                            <!-- GST Available -->
                            <div class="FormGroup franchisebecomeForm">
                                <div class="lableCnt"> 
                                    <label>GST Available</label> 
                                </div>
                                <div class="inputCnt"> 
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Yes
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- GST No. -->
                            <div class="FormGroup franchisebecomeForm">
                                <div class="lableCnt"> 
                                    <label>GST No.</label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder="Enter GST No." type="text"> 
                                </div>
                            </div>

                            <!-- PAN No. -->
                            <div class="FormGroup franchisebecomeForm">
                                <div class="lableCnt"> 
                                    <label>Experience</label> 
                                </div>
                                <div class="inputCnt"> 
                                    <input class="formControl" placeholder="Enter Experience" type="text"> 
                                </div>
                            </div>
                        </div>
                   
                        <!-- Franchise Investment section -->
                        <div class="franchiseAppontForm">
                            <div class="heading">Franchisor Investment Detail</div>
                            <div class="inputField franInvest">
                                <!-- Product Keyword -->
                                <div class="FormGroup">
                                    <div class="lableCnt"> 
                                        <label>Product Keyword</label> 
                                    </div>
                                    <div class="inputCnt"> 
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">Single Unit Franchise
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">Master Unit Franchise
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Investment Required -->
                                <div class="FormGroup">
                                    <div class="lableCnt"> 
                                        <label>Investment Required</label> 
                                    </div>
                                    <div class="inputCnt flexbox"> 
                                        <div class="investWidth">
                                            <input class="formControl" type="text"> 
                                        </div>
                                        <div class="investWidth">
                                            <select name="annual_sale_unit" class="formControl"> 
                                                <option value="" id="annual_sale_id">--Select--</option>
                                                <option value="K">K</option>
                                                <option value="Lac">Lac</option>
                                                <option value="Cr">Cr</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Investment Includes section -->
                        <div class="franchiseAppontForm">
                            <div class="heading">Investment Includes</div>
                            <div class="termSection">
                                <!-- Franchise section -->
                                <div class="FormGroup">
                                    <div class="lableCnt"> 
                                        <label>Franchise Fee</label> 
                                    </div>
                                    <div class="inputCnt"> 
                                    <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Equipments section -->
                                <div class="FormGroup">
                                    <div class="lableCnt"> 
                                        <label>Equipments</label> 
                                    </div>
                                    <div class="inputCnt"> 
                                    <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Furniture and Fixtures section -->
                                <div class="FormGroup">
                                    <div class="lableCnt"> 
                                        <label>Furniture and Fixtures</label> 
                                    </div>
                                    <div class="inputCnt"> 
                                    <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Advertising / Marketing section -->
                                <div class="FormGroup">
                                    <div class="lableCnt"> 
                                        <label>Advertising / Marketing</label> 
                                    </div>
                                    <div class="inputCnt"> 
                                    <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio" checked>Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Important Details section -->
                        <div class="heading franchiseAppontForm">Important Details</div>
                        <div class="termSection">
                            <!-- Franchise section -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Training Program available for the franchisee</label> 
                                </div>
                                <div class="inputCnt"> 
                                <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio" checked>Yes
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Franchise Fees section -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Software/Hardware Support included in the Franchise Fees</label> 
                                </div>
                                <div class="inputCnt"> 
                                <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio" checked>Yes
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Franchise Renewable section -->
                            <div class="FormGroup franchiseAppontForm">
                                <div class="lableCnt"> 
                                    <label>Is the Franchise Renewable</label> 
                                </div>
                                <div class="inputCnt"> 
                                <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio" checked>Yes
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Industry Category -->
                            <div class="FormGroup">
                                <div class="lableCnt"> 
                                    <label>Industry Category
                                        <span class="text-danger"> *</span>
                                    </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <select name="industry_category" multiple="" class="formControl multipleSelect"> 
                                        <option value="">Select Category</option>
                                        <option value="">Agriculture</option>
                                        <option value="">Apparel &amp; Fashion</option>
                                        <option value="">Automobile</option>
                                        <option value="">Brass Hardware &amp; Components</option>
                                        <option value="">Business Services</option>
                                        <option value="">Chemicals</option>
                                    </select> 
                                </div>
                            </div>

                            <!-- Get Sub Category -->
                            <div class="FormGroup">
                                <div class="lableCnt"> 
                                    <label>Get Sub Category</label> 
                                </div>
                                <div class="inputCnt"> 
                                    <select name="industry_category" multiple="" class="formControl multipleSelect"> 
                                        <option value="">Select Category</option>
                                        <option value="">Agriculture</option>
                                        <option value="">Apparel &amp; Fashion</option>
                                        <option value="">Automobile</option>
                                        <option value="">Brass Hardware &amp; Components</option>
                                        <option value="">Business Services</option>
                                        <option value="">Chemicals</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Please Describe Your Business Profile  -->
                            <div class="FormGroup">
                                <div class="lableCnt"> 
                                    <label>Please Describe Your Business Profile 
                                        <span class="text-danger"> *</span>
                                    </label> 
                                </div>
                                <div class="inputCnt"> 
                                    <textarea id="address" name="address" class="formControl"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Location Section -->
                        <div class="heading mb-0">Location Details 
                            <span class="redText"> *</span>
                        </div>
                        <div class="locationDetail">
                            <!-- All India -->
                            <div class="checkbox checkbox-default checkbox-inline acrossChq">
                                <input type="checkbox" id="india" name="india"> 
                                <label for="india" class="ml-2"><b>Across India</b></label> 
                            </div>  
                            <!-- All States -->
                            <ul id="i-check" class="acrossInd">
                                <li><div class=""> <label for="zone"><b> </b></label> </div></li>
                                <li><div class=""> <label for="zone"><b> Central</b></label> </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Madhya Pradesh </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Chhattisgarh </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Jharkhand </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Bihar </label> 
                                    </div>
                                </li>
                                <li><div class=""> <label for="zone"><b> East</b></label> </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label for="state_385"> Assam </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> West Bengal </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Sikkim </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Nagaland </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Mizoram </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Tripura </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Odisha </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Meghalaya </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Manipur </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Arunachal Pradesh </label> 
                                    </div>
                                </li>
                                <li><div class=""> <label for="zone"><b> North</b></label> </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input value="1272" type="checkbox"> 
                                        <label> Haryana </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Jammu and Kashmir </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Punjab </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Uttarakhand </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Delhi </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Uttar Pradesh </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Himachal Pradesh </label> 
                                    </div>
                                </li>
                                <li><div class=""> <label for="zone"><b> South</b></label> </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Tamil Nadu </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Andhra Pradesh </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Kerala </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Telangana </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Karnataka </label> 
                                    </div>
                                </li>
                                <li><div class=""> <label for="zone"><b> Union Territories</b></label> </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Lakshadweep </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Puducherry </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Andaman and Nicobar Islands </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Dadra and Nagar Haveli and Daman and Diu </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Daman and Diu </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Chandigarh </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Dadra and Nagar Haveli </label> 
                                    </div>
                                </li>
                                <li><div class=""> <label for="zone"><b> West</b></label> </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Rajasthan </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Gujarat </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Maharashtra </label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Goa </label> 
                                    </div>
                                </li>
                            </ul>
                
                            <div class="checkbox checkbox-default checkbox-inline acrossChq"> 
                                <input name="world" id="world" type="checkbox"> 
                                <label for="world"><b>World Wide</b></label> 
                            </div>
                            <ul id="w-check">
                                <li>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Caribbean</label> 
                                    </div>
                                </li> 
                                <li>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Western Africa</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Central Africa (Middle Africa)</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> South-Central Asia</label> 
                                    </div>
                                </li> 
                                <li>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Northern Europe</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Southern Europe</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Northern Asia</label> 
                                    </div>
                                </li> 
                                <li>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Eastern Africa</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Central America</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Eastern Europe</label> 
                                    </div>
                                </li> 
                                <li>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> North America</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Northern Africa</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Western Asia and Middle East</label> 
                                    </div>
                                </li> 
                                <li>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> South-East Asia</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox">
                                        <label> Western Europe</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Southern Africa</label> 
                                    </div>
                                </li> 
                                <li>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> Eastern Asia</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input type="checkbox" name="state"> 
                                        <label> South America</label> 
                                    </div>
                                    <div class="checkbox checkbox-default checkbox-inline"> 
                                        <input name="state" type="checkbox"> 
                                        <label> Australia/New Zealand</label> 
                                    </div>
                                </li> 
                                <li></li>
                            </ul>
                        </div>

                        <!-- Remarks -->
                        <div class="joinFormGroup mt-4">
                            <div class="lableCnt"> 
                                <label class="lineH">Remark 
                                    <span class="redText"> *</span>
                                </label> 
                            </div>
                            <div class="inputCount">
                                <textarea name="remarks" id="remark" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="FormGroup mt-5">
                            <div class="lableCnt none">&nbsp;</div>
                            <div class="inputCnt center"> 
                                <input type="submit" id="submit" name="submit" class="joinSubmitBtns" value="SUBMIT">
                            </div>
                        </div>
                    </div>
                </form>               
            </div>           
        </div>

    </div>
</section>


<!-- Footer -->
<?html include'layout/footer.html'; ?>

<script>
    $(document).ready(function(){
        $('.franchiseAppoint').on('click', function(){
            $('.contents').show();
            $('.franchiseAppontForm').show();
            $('.franchisebecomeForm').hide();
        });

        $('.franchiseBecome').on('click', function(){
            $('.contents').show();
            $('.franchisebecomeForm').show();
            $('.franchiseAppontForm').hide();
        });
    });
</script>



