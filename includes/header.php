<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">                                       
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="<?php echo $_SESSION['IMAGE']; ?>" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $_SESSION['FIRST-NAME']." ".$_SESSION['LAST-NAME']; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="<?php echo $_SESSION['IMAGE']; ?>" alt="<?php echo $_SESSION['FIRST-NAME']." ".$_SESSION['LAST-NAME']; ?>" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $_SESSION['FIRST-NAME']." ".$_SESSION['LAST-NAME']; ?></a>
                                        </h5>
                                        <span class="email"><?php echo $_SESSION['EMAIL'] ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="index.php?page=profile">
                                            <i class="zmdi zmdi-account"></i>View Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="index.php?page=edit-profile">
                                            <i class="zmdi zmdi-settings"></i>Edit Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="index.php?page=delete-profile">
                                            <i class="zmdi zmdi-money-box"></i>Delete Profile</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="logout.php">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

