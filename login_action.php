<?php 
    $email= $_POST['email'];
    $pword= $_POST['password'];
    $query= "select * from account where email = '$email'and u_password='$pword'";
    include('db/db_connect.php');
    $res = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)==1){
        session_start();
        $_SESSION['LOGEIN']='OK';
        $_SESSION['ACCID'] = $data['accid'];
        $_SESSION['FIRST-NAME'] = $data['first_name'];
        $_SESSION['LAST-NAME'] = $data['last_name'];
        $_SESSION['IMAGE'] = $data['image'];
        $_SESSION['TELEPHONE'] = $data['telephone'];
        $_SESSION['EMAIL'] = $data['email'];
        // header('location: view-member-profile.php?mid='.$data['accId']);
        header('location: index.php');
    }else{
        header('location: login.php?error=1');
    }

?>