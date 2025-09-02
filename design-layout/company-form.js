export default function companyForm(){
    return (
        `<div class="company-form">
        <div class="eExjwc askForm">
            <div class="d-flex justify-content-between">
                <div>
                    <div class="mainHeading">What are you looking ?</div>
                    <div class="subTitle">Fast Track Your Business</div>
                </div>
            </div>
            <div class="d-flex bwmdfO company-top mb-2" >
                <p class="fDTEWU fran-active bg-one" id="company-dist-select">Distributor</p>
                <p class="fDTEWU bg-one ml-3" id="company-fran-select">Franchise</p>
            </div>
            <form action="#" class="homeForm">
                <div id="company-dist">
                    <div class="form-check-inline radio-dist">
                        <input type="radio" class="form-check-input radioLabCircle" name="optradio">
                        <label class="form-check-label">I am looking for distributor</label>
                    </div>
                    <div class="form-check-inline radio-dist">
                        <input type="radio" class="form-check-input radioLabCircle" name="optradio">
                        <label class="form-check-label">I want to become a distributor</label>
                    </div>
                </div>
                <div id="company-franch">
                    <div class="form-check-inline radio-fran">
                        <input type="radio" class="form-check-input radioLabCircle" name="optradio">
                        <label class="form-check-label">I am looking for franchise</label>
                    </div>
                    <div class="form-check-inline radio-fran">
                        <input type="radio" class="form-check-input radioLabCircle" name="optradio">
                        <label class="form-check-label">I want to become a franchise</label>
                    </div>
                </div>
                
                <div class="row form-input mt-3">
                    <div class="col-md-6 ">
                        <div class="form-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group input-group-lg">
                           <input type="text" class="form-control" placeholder="Enter Product Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Type your requirment"></textarea>
                        </div>
                    </div>
                    <div class="col-12 form-btn">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>`
    )
};

