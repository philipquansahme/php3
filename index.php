<?php
    include('sec.php'); 
    include('path.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php  require('includes/head.php') ; ?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php  include('includes/nav.php'); ?> 
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
	    <?php include('includes/nav1.php'); ?>       
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
        	<?php include('includes/header.php'); ?>			
	        <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <?php include('includes/content.php'); ?>
	        </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
        <?php include('includes/jquery.php'); ?>
</body>
</html>
