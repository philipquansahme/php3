<?php
    require('database_functions.php');

    $query = addRecord($_POST, 'account');
    //echo $query;

    include('../db/db_connect.php');
    $result = mysqli_query($con, $query);
    //echo $result;
    $id = mysqli_insert_id($con);
    $first_name = $_POST['first_name'];
    $phone_number = $_POST['telephone'];
    $otp_code = $_POST['otp_code'];
    $sms_message = "Hello ".$first_name.", Registration Successful. Your OTP code is: ".$otp_code." Kindly use is for verification";
    include('sms.php');
    $sms_result = sendSMS($phone_number, $sms_message);

    if($result){
        print_r($_FILES);
        $file_name = $_FILES['image']['name'];
        if (empty($file_name)) {
            $path = ($_POST['gender'] == 'male') ? 'uploads/male-default.jpg' : 'uploads/female-default.jpg';
        }else{
            $tmp_location = $_FILES['image']['tmp_name'];
            $new_file = pathinfo($file_name);
            $ext = $new_file['extension'];
            $characters = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@-_";
            $fname = substr(str_shuffle($characters), 0,10);
            $path = "uploads/$fname.$ext";  
            $path_file = "../uploads/$fname.$ext";  
            move_uploaded_file($tmp_location, $path_file);
        }
        $sql = "update account set image='$path' where accid= $id";
        mysqli_query($con, $sql);
        header('location: ../index.php?page=otp-verification&mid='.$id);
        //header('location: ../index.php?page=view-all-records');
    }else{
        header('location: ../index.php?page=add-record&msg=1'); 
        //echo mysqli_error($con);
    }
?>