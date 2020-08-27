<?php
    

    require('database_functions.php');

    $query = editRecord($_POST, 'account', 'accid');
    
    // echo $query;
    $id = $_POST['accid'];
    include('../db/db_connect.php');
    $result = mysqli_query($con, $query);
    if($result){
        print_r($_FILES);
        $file_name = $_FILES['image']['name'];
        if (empty($file_name)) {
            $path = $_POST['oldimage'];
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
        header('location: ../index.php?page=view-all-records');
        
    }else{
        header('location: ../index.php?page=edit-record&mid=$id&msg=1'); 
        //echo mysqli_error();
    }
?>