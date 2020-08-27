<?php
    $mid = $_SESSION['ACCID'];
    $sql = "select * from account where accid=$mid";
    include('db/db_connect.php');
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<div class="container m-t-20">
    <div class="row">
        <div class="col-md-1">
        
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Profile</div>
                <div class="card-body">
                    <?php
                        $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 0;
                        if ($msg == 1) {
                            echo '<div class="alert alert-danger" role="alert">There was a problem adding the Record, please try again!</div>';
                        }
                    ?>
                    <div class="card-title">
                        <h3 class="text-center title-2">Kindly Fill Form to Edit Your Profile Details</h3>
                    </div>
                    <hr>
                    <form method="post" enctype="multipart/form-data" action="actions/edit_record_action.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">First Name</label>
                                <input type="hidden" name="accid" value="<?php echo $mid; ?>">
                                <input type="text" class="form-control" id="inputEmail4" name="first_name" value="<?php echo $row['first_name'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" name="last_name" value="<?php echo $row['last_name'] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Date of Birth</label>
                                <input type="date" class="form-control" id="inputEmail4" name="dob" value="<?php echo $row['dob'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="inputPassword4" name="telephone" value="<?php echo $row['telephone'] ?>">
                                <small id="phoneNumberHelp" class="form-text text-muted">Kindly enter Numbers Only</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $row['email'] ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlFile1">Upload Image</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="">
                                <br>
                                <img alt="" src="<?php echo $row['image'] ?>" width="25%"> 
                                <input type="hidden" name="oldimage" value="<?php echo $row['image'] ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Select Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox1" value="male" name="gender" <?php if($row['gender'] == 'male') { echo 'checked';}?>>
                                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox2" value="female" name="gender" <?php if($row['gender'] == 'female') { echo 'checked';}?>>
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Enter Address</label>
                                <input type="text" placeholder="Residential Address" class="form-control" aria-describedby="phoneNumberHelp" id="inputPassword4" name="address" value="<?php echo $row['address'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="u_password" value="<?php echo $row['u_password'] ?>">
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