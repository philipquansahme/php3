<?php
    $mid = $_POST['accid'];
    $otp_code = $_POST['otp_code'];
    $status = $_POST['status'];
    $sql = "select * from account where accid=$mid";
    include('../db/db_connect.php');
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['otp_code'] == $otp_code) {
        $new_sql = "update account set status='$status' where accid= $mid";
        mysqli_query($con, $new_sql);
        header('location: ../index.php?page=view-all-records&msg=1');
    }else{
        header('location: ../index.php?page=otp-verification&error=1&mid='.$mid);
    }

?>