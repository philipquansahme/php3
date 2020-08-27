<?php
    // session_start();
    // if (!(isset($_session['LOGGEDIN']))) {
    //     header('location: login.php?error=1');
    // }
?>
<div class="container-fluid m-t-20">
    <div class="row">
        <div class="col-md-12">
            <?php
                $msg = (isset($_GET['msg'])) ? $_GET['msg'] : 0;
                if ($msg == 1) {
                    echo '<div class="alert alert-success" role="alert">New Record Added Successfully!</div>';
                }
            ?>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="property">
                            <option selected="selected">All Properties</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="time">
                            <option selected="selected">Today</option>
                            <option value="">3 Days</option>
                            <option value="">1 Week</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                </div>
                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add New Record</button>
                    <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                    <i class="zmdi zmdi-edit"></i>Edit a Record</button>
                    <button class="au-btn au-btn-icon btn-info au-btn--small">
                    <i class="zmdi zmdi-filter-list"></i>View a Record</button>
                    <button class="au-btn au-btn-icon btn-danger au-btn--small">
                    <i class="zmdi zmdi-delete"></i>Delete a Record</button>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <form method="post" action="list-action.php">
                    <table class="table table-data2">
                        <thead class="bg-dark">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Image</th>
                                <th class="text-white">First Name</th>
                                <th class="text-white">Last Name</th>
                                <th class="text-white">Email</th>
                                <th class="text-white">Phone Number</th>
                                <th class="text-white">Gender</th>
                                <th class="text-white"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $end = 5;
                            $cp = (isset($_GET['cp'])) ? $_GET['cp'] : 1;
                            $start = ($cp-1)*$end;
                            $sql = "select * from account limit $start,$end";
                            include('db/db_connect.php');
                            $result = mysqli_query($con, $sql);
                            $i = 1;
                            while($data = mysqli_fetch_assoc($result)){
                                $mid = $data['accid'];
                                $path = $data['image'];
                                echo "<tr class='tr-shadow'>
                                        <td>
                                            <label class='au-checkbox'>
                                                <input type='checkbox' name='a$i' value='$mid'>
                                                <span class='au-checkmark'></span>
                                            </label>
                                        </td>
                                        <td width='7%'><img src='$path' width='80%'></td>
                                        <td>".$data['first_name']."</td>
                                        <td>".$data['last_name']."</td>
                                        <td><span class='block-email'>".$data['email']."</span></td>
                                        <td>".$data['telephone']."</td>
                                        <td>".$data['gender']."</td>
                                        <td>
                                            <div class='table-data-feature float-left'>
                                                <a href='index.php?page=edit-record&mid=$mid' class='item bg-primary' data-toggle='tooltip' data-placement='top' title='Edit'>
                                                    <i class='zmdi zmdi-edit text-white'></i>
                                                </a>
                                                <a href='index.php?page=view-record&mid=$mid' class='item bg-info' data-toggle='tooltip' data-placement='top' title='Details'>
                                                    <i class='zmdi zmdi-filter-list text-white'></i>
                                                </a>
                                                <a href='index.php?page=delete-record&allid=$mid' class='item bg-danger' data-toggle='tooltip'  data-placement='top' title='Delete'>
                                                    <i class='zmdi zmdi-delete text-white'></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class='spacer'></tr>";
                                    $i++;    
                            }
                            $second_sql = "select * from account";
                            $secod_result = mysqli_query($con, $second_sql);
                            $num = mysqli_num_rows($secod_result);
                            $num_pages = ceil($num/$end);
                        ?>
                        <tr>
                                <th scope="col" colspan="8">
                                    <?php
                                        for ($w=1; $w<$num_pages+1 ; $w++) { 
                                            if ($w ==$cp) {
                                                echo $w;
                                            }else{
                                                echo "&nbsp; <a href='index.php?page=view-all-records&cp=$w'>$w</a> &nbsp;";
                                            }
                                        }
                                        echo " |    page $cp of $num_pages pages";
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="col-lg-1">
        
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    </div>
</div>