<?php
    $page = (isset($_GET['page'])) ? $_GET['page'] : 'home-page';
    switch ($page) {
        case 'home-page':
            $page_title = 'Home Page: Membership Application';
            $content_title = 'Home Page';
            $content_path = 'pages/home.php';
            break;
        case 'profile':
            $page_title = 'View Profile: Membership Application';
            $content_title = 'View Profile';
            $content_path = 'pages/view_profile.php';
            break;
        case 'edit-profile':
            $page_title = 'Edit Profile: Membership Application';
            $content_title = 'Edit Profile';
            $content_path = 'pages/edit_profile.php';
            break;
        case 'delete-profile':
            $page_title = 'Delete Profile: Membership Application';
            $content_title = 'Delete Profile';
            $content_path = 'pages/delete_profile.php';
            break;
        case 'add-record':
            $page_title = 'Add Record: Membership Application';
            $content_title = 'Add Record';
            $content_path = 'pages/add_record.php';
            break;
        case 'view-all-records':
            $page_title = 'View All Records: Membership Application';
            $content_title = 'View All Records';
            $content_path = 'pages/view_all_records.php';
            break;
        case 'edit-record':
            $page_title = 'Edit Record: Membership Application';
            $content_title = 'Edit Record';
            $content_path = 'pages/edit_record.php';
            break;
        case 'view-record':
            $page_title = 'View Record: Membership Application';
            $content_title = 'View Record';
            $content_path = 'pages/view_record.php';
            break;
        case 'delete-record':
            $page_title = 'Delete Record: Membership Application';
            $content_title = 'Delete Record';
            $content_path = 'pages/delete_record.php';
            break;
        case 'otp-verification':
            $page_title = 'OTP Verification: Membership Application';
            $content_title = 'Verify Phone Number';
            $content_path = 'pages/otp_verification.php';
            break;
    }
?>