<?php
    $sub = $_POST['sub'];
    $allid = $_POST['allid'];
    switch ($sub) {
        case 'Cancel':
            header('location: ../index.php?page=view-all-records');
            break;

        case 'Continue':
            include('../db/db_connect.php');
            $sql = "delete from account where accid  in ($allid)";
            mysqli_query($con, $sql);
            //echo $sql;
            header('location: ../index.php?page=view-all-records');
            break;
    }
?>