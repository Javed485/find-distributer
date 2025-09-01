<!-- Header -->
<?php include'layout/header.php'; ?>

<!-- Distributer Content -->
<section class="bodySec">
    <div class="container">
        
        <!-- Navbar -->
        <?php include'layout/second-navbar.php'; ?>
            
        <!-- User Details -->
        <div class="userBox mt-4">
            <div class="greenBox">
                <h6>User Details</h6>
            </div>
            <div class="userDetail">
                <table>
                    <tbody>
                        <tr>
                            <td class="firstBox"><b>Name :</b></td>
                            <td class="secondBox">Abhishek</td>
                        </tr>
                        <tr>
                            <td class="firstBox"><b>Company Name :</b></td>
                            <td class="secondBox">Digisajilo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Profile Form -->
        <div class="mydistributerBox mt-4">
            <div class="tableheading">
                <div><b>These are the existing record(s) found.</b></div>
                <div class="t_add"> 
                    <a href="edit-my-distributer.php">Add New Record</a> 
                </div>               
            </div>
            <div class="distributerDetail table-responsive">
                <table class="table" >
                    <tbody>
                        <tr style="color:#000000">
                            <th>Mode</th>
                            <th>Product Keywords</th>
                            <th>Brand Name</th>
                            <th>Edit</th>
                            <th>Upload Products</th>
                        </tr>
                        <tr class="t_data">
                            <td><b style="color:#962800">Looking</b> for Distributor</td>
                            <td>Bold Care</td>
                            <td>Distributer</td>
                            <td><a href="edit-my-distributer.php">Edit</a></td>
                            <td><a href="upload-product.php">Upload Products</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include'layout/footer.php'; ?>
