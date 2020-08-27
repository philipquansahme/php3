<?php
    $mid = $_GET['mid'];
    $sql = "select * from account where accid=$mid";
    include('db/db_connect.php');
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<div class="container m-t-20">
    <div class="row">
        <div class="col-md-1">
        
        </div>
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">OTP Verification</div>
                <div class="card-body">
                    <?php
                        $error = (isset($_GET['error'])) ? $_GET['error'] : 0;
                        if ($error == 1) {
                            echo '<div class="alert alert-danger" role="alert">There was a problem, enter the correct OTP!</div>';
                        }
                    ?>
                    <div class="card-title">
                        <h3 class="text-center title-2">Verify your Phone Number</h3>
                    </div>
                    <hr>
                    <form method="post" enctype="multipart/form-data" action="actions/otp_verification_action.php">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter OTP Code Sent to <?php echo $row['telephone'] ?></label>
                            <input type="text" class="form-control"  name="otp_code">
                            <input type="hidden" class="form-control" name="status" value="inactive">
                            <input type="hidden" class="form-control" name="accid" value="<?php echo $mid; ?>">
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