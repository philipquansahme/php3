<?php
    $mid = $_GET['mid'];
    $sql = "select * from account where accid=$mid";
    include('db/db_connect.php');
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<div class="container m-t-20">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                    <div class="bg-overlay bg-overlay--blue"></div>
                    <h3>
                        <i class="zmdi zmdi-account-calendar"></i><?php echo $row['first_name']." ".$row['last_name']; ?></h3>
                    <a href="index.php?page=edit-record&mid=<?php echo $mid ?>" class="au-btn-plus" data-toggle='tooltip' data-placement='top' title='Edit This Record'>
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                </div>
                <div class="au-task js-list-load">
                    <div class="au-task__title">
                        <p>Record Details of <?php echo $row['first_name']." ".$row['last_name']; ?></p>
                    </div>
                    <div class="au-task-list js-scrollbar3">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" width="200rem" src="<?php echo $row['image']; ?>" alt="<?php echo $row['first_name']." ".$row['last_name']; ?>">
                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $row['first_name']." ".$row['last_name']; ?></h5>
                            <div class="location text-sm-center m-t-20">
                                <i class="fa fa-map-marker"></i> <?php echo $row['address']; ?>
                            </div>
                            <div class="location text-sm-center">
                                <i class="fa fa-envelope"></i> <?php echo $row['email']; ?>
                            </div>
                            <div class="location text-sm-center">
                                <i class="fa fa-phone"></i> <?php echo $row['telephone']; ?>
                            </div>
                            <div class="location text-sm-center">
                                <i class="fa fa-users"></i> <?php echo $row['gender']; ?>
                            </div>
                            <div class="location text-sm-center">
                                <i class="fa fa-calendar"></i> <?php echo $row['dob']; ?>
                            </div>
                        </div>
                        <!-- <div class="mx-auto d-block">
                            <button class="mx-auto au-btn au-btn-load js-load-btn">load more</button>
                        </div> -->
                    </div>
                    <!-- <div class="au-task__footer">
                        
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>