<?php
    $random_otp = rand(1000,9999); 
?>
<div class="container m-t-20">
    <div class="row">
        <div class="col-md-1">
        
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add Record</div>
                <div class="card-body">
                    <?php
                        $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 0;
                        if ($msg == 1) {
                            echo '<div class="alert alert-danger" role="alert">There was a problem adding the Record, please try again!</div>';
                        }elseif ($msg == 0) {
                            echo '<div class="alert alert-warning" role="alert">Please fill the form to add a record</div>';
                        }
                    ?>
                    <div class="card-title">
                        <h3 class="text-center title-2">Kindly Fill Form to Add a Record</h3>
                    </div>
                    <hr>
                    <form method="post" enctype="multipart/form-data" action="actions/add_record_action.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="first_name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" name="last_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Date of Birth</label>
                                <input type="date" class="form-control" id="inputEmail4" name="dob">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="inputPassword4" name="telephone">
                                <small id="phoneNumberHelp" class="form-text text-muted">Kindly enter Numbers Only</small>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlFile1">Upload Image</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Select Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox1" value="male" name="gender">
                                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox2" value="female" name="gender">
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Enter Address</label>
                                <input type="text" placeholder="Residential Address" class="form-control" aria-describedby="phoneNumberHelp" id="inputPassword4" name="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="u_password">
                            <input type="hidden" class="form-control" name="otp_code" value="<?php echo $random_otp ?>">
                            <input type="hidden" class="form-control" name="status" value="active">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1">
        
        </div>
    </div>
</div>
